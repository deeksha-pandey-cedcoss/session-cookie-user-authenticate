<?php

use Phalcon\Mvc\Controller;

// defalut dashboard controller view

class DashboardController extends Controller
{
    public function indexAction()
    {
        if ($this->cookies->has("login")) {
            echo  $this->view->date = $this->time->dat();
            echo "<br>";
            echo $this->tag->linkTo(['logout', 'Logout', 'class' => 'btn btn-primary']);
        } else {
            echo "access denied :(";
            die;
            $this->response->redirect('signup/index');
        }
    }
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect('login/index');
    }
}
