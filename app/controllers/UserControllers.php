<?php
require_once(__DIR__ . '/../models/User.php');

class UserControllers {
    private $model;
    
    public function __construct()
    {
        $this->model = new User();
    }

    public function index() {
        $users = $this->model->getAll(); 
        require_once __DIR__.'/../views/users/index.php';
    }

}
?>