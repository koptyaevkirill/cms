<?php
require_once 'models/User.php';
require_once 'models/UserRepository.php';
class IndexController extends Controller {
    
    public function indexAction() {}
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
        $user->setEmail($data['login']);
        $user->setPassword($data['password']);
        $user->setSessionPassword($_POST['password']);
        if($user->isValid()) {
            Session::set('UserID', $data['id']);
            header('Location: /');
        } else {
            $data = ['error' => 'Wrong email or password'];
        }
        echo json_encode($data);
    }
    /**
     * Registration page
     */
    public function registrationAction() {
        $this->view->generate('web', 'registration.php', 'index.php');
    }
    public function registrationSaveAction() {
        $user = new User();
        $repository = new UserRepository();
        $user->setEmail($_POST['email']);
        $user->setPassword($_POST['password']);
        $repository->save($user->toArray());
        header('Location: /login');
        
    }
    /**
     * Logout user
     */
    public function logoutAction() {
        Session::destroy();
        header('Location: ../');
        exit();
    }
}

