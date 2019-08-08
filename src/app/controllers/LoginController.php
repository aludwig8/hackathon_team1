<?php
namespace App\app\controllers;
use Psr\Container\ContainerInterface;

class LoginController extends BaseController
{
    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        parent::__construct($container);
    }

    public function login($request, $response, $args) {
        $response = $this->view->render($response, 'login.twig');
        return $response;
    }

    public function checkLogin($request, $response, $args) {
        $data = $request->getParsedBody();

        if (isset($data['uname']) && isset($data['pswd'])) {
            if (is_string($data['uname']) && is_string($data['pswd'])) {
                // check if user is found
                if ($this->userService->checkUserCredentials($data['uname'], md5($data['pswd']))) {
                    return $response->withRedirect('/');
                }
            }
        }

        // error => return to login page with error parameter
        $response = $this->view->render($response, 'login.twig', ['login_error' => True]);
        return $response;
    }
}