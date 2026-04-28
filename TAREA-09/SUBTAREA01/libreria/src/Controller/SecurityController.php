<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * Muestra el formulario de inicio de sesión y gestiona posibles errores.
     * Symfony se encarga automáticamente del proceso de autenticación.
     */
    #[Route(path: '/login', name: 'app_login')]
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        // Obtiene el último error de autenticación (si existe)
        $error = $authenticationUtils->getLastAuthenticationError();

        // Último nombre de usuario introducido
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }

    /**
     * Punto de salida del usuario.
     * Symfony intercepta esta ruta automáticamente mediante el firewall.
     */
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Este método nunca se ejecuta: el firewall gestiona el logout.
        throw new \LogicException('This method is intercepted by the firewall.');
    }
}
