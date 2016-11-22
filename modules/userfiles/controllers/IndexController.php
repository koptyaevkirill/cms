<?php
require_once 'models/File.php';
require_once 'models/FileRepository.php';
class IndexController extends Controller {
    
    public function indexAction() {
        $repository = new FileRepository();
        $data = $repository->findAll();
        //var_dump($data);
        $this->view->generate('userfiles', 'index.php', 'index.php');
    }
    public function uploadAction() {
        if ($_FILES) {
            $uploads_dir = 'static/uploads';
            $tmp_name = $_FILES["myfile"]["tmp_name"];
            $name = array_shift(explode('.', $_FILES["myfile"]["name"]));
            $format = end(explode('.', $_FILES["myfile"]["name"]));
            $last_insert = $this->saveAction($name.'.'.$format);
            move_uploaded_file($tmp_name, "$uploads_dir/$last_insert.$format");
        }
        
    }
    public function saveAction($file_name) {
        $userID = Session::get('UserID');
        $file = new File();
        $repository = new FileRepository();
        $file->setUserID($userID);
        $file->setName($file_name);
        $response = $repository->save($file->toArray());
        return $response;
    }
    public function getAction() {
        $repository = new FileRepository();
        $data = $repository->findAll();
        echo json_encode($data);
    }

}

