<?php

class LoginController extends Controller
{
    private $accountModel;

    public function __construct()
    {
        $this->model('AccountModel');
        $this->accountModel = new AccountModel;
    }

    public function index()
    {
        return $this->view('frontend.login.index');
    }

    public function check()
    {
        if (isset($_POST['login'])) {
            $username = isset($_POST['username']) ? $_POST['username'] : null;
            $password = isset($_POST['password']) ? $_POST['password'] : null;
            $remember = isset($_POST['remember']) ? $_POST['remember'] : null;
            if (!empty($username) && !empty($password)) {
                $account = $this->accountModel->processLogin($username, $password);
                if ($account) {
                    session_start();
                    $_SESSION['username'] = $username;
                    if ($remember == 'on') {
                        setcookie('username', $username, time() + 60 * 60 * 24 * 10, "/");
                        setcookie('password', $password, time() + 60 * 60 * 24 * 10, "/");
                    }
                    return $this->view('frontend.login.index', [
                        "username" => $_SESSION['username']
                    ]);
                }
            }
        }
    }
}
