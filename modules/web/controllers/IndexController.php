<?php
class IndexController extends Controller {
     
    /**
     * Home page
     */
    public function indexAction() {
        $this->view->generate('web', 'index.php', 'index.php');
    }
    /**
     * Login page
     */
    public function loginAction() {
        $this->view->generate('web', 'login.php', 'index.php');
    }
    /**
     * Logout user
     */
    public function logoutAction() {}

}

