<?php
require_once('../app/core/Controller.php');

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';

        $this->view('login/index', $data);
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];


        $data['login'] = $this->model('Login_model')->getUser($username, $password);

        // session_start();
        if ($data['login'] == NULL) {
            header("Location:" . BASEURL . "/Login");
        } else {
            foreach ($data['login'] as $row) :
                $_SESSION['username'] = $row['username'];
                $_SESSION['hak_akses'] = $row['hak_akses'];
                if ($_SESSION['username']) {
                    header("Location: " . BASEURL);
                }

            endforeach;
        }
    }

    public function logout()
    {
        session_start();
        unset($_SESSION["username"]);
        unset($_SESSION["hak_akses"]);
        session_destroy();
        header("Location:" . BASEURL);
    }
}
