<?php

// src/EventListener/UtilisateurListener.php

namespace App\EventListener;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\SecurityBundle\Security;

class UtilisateurEventListener
{
    /**
     * @var UtilisateurRepository
     */
    private $utilisateurRepository;

    public function __construct(UtilisateurRepository $utilisateurRepository, private Security $security)
    {
        $this->utilisateurRepository = $utilisateurRepository;
    }

    public function prePersist(Utilisateur $utilisateur): void
    {
        $utilisateur->setClient($this->security->getUser());
    }
}
