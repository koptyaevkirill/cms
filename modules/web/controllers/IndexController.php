<?php
require_once 'models/User.php';
require_once 'models/UserRepository.php';
class IndexController extends Controller {
     
    /**
     * Home page
     */
    public function indexAction() {
        Session::init();
        $this->view->generate('web', 'index.php', 'index.php');
    }
    /**
     * Login page
     */
    public function loginAction() {
        $this->view->generate('web', 'login.php', 'index.php');
    }
    public function loginCheckAction() {
        $user = new User();
        $repository = new UserRepository();
        $data = $repository->findByOne($_POST['email']);
        if($data['password'] === md5($_POST['password'])) {
            Session::init();
            Session::set('loggedIn', true);
            header('Location: /');
        } else {
            header('Location: ../login');
        }
    }
    /**
     * Registration page
     */
    public function registrationAction() {
        Session::init();
        $this->view->generate('web', 'registration.php', 'index.php');
    }
    public function registrationSaveAction() {
        $user = new User();
        $repository = new UserRepository();
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $repository->save($user->toArray());
    }
    /**
     * Logout user
     */
    public function logoutAction() {
        Session::init();
        Session::destroy();
        header('Location: ../');
        exit();
    }

}

