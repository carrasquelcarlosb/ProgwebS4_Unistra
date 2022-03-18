<?php
class Admin extends Controller
{
    public function __construct()
    {
        $this->model = $this->model('Admin');
    }

    public function login()
    {
        $data = [];
        $this->view('admin/login.php', $data);
    }
}