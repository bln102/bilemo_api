<?php

// src/EventListener/UtilisateurListener.php

namespace App\EventListener;

use App\Entity\User;
use App\Entity\Utilisateur;
use App\Repository\UserRepository;
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
        $user = $this->security->getUser();
        $utilisateur->setUser($user);
    }
}
