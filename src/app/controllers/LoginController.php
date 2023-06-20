<?php

use Phalcon\Mvc\Controller;

// login controller
class LoginController extends Controller
{
    public function indexAction()
    {
        // default login view
    }
    // login action page
    public function loginAction()
    {
        if ($this->request->isPost()) {
            $password1 = $this->request->getPost("password");
            $email1 = $this->request->getPost("email");
        }


        $email = $this->session->get('email');
        $pass = $this->session->get('password');
        if ($email1 == $email && $password1 == $pass) {
            $this->view->message = "LOGIN SUCCESSFULLY";
            $this->cookies->set('login', 1, time() + 15 * 86400);
            $this->response->redirect('dashboard/index');
        } else {

            $this->view->message = "Not Login succesfully ";
            $this->response->redirect('login/index');
        }
    }
}
