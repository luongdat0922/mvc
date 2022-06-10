<?php
class RegisterController extends Controller
{
    private $accountModel;

    public function __construct()
    {
        $this->model('AccountModel');
        $this->accountModel = new AccountModel;
    }

    public function index()
    {
        return $this->view('frontend.register.index');
    }

    public function check()
    {
        if (isset($_POST['register'])) {
            $username = isset($_POST['username']) ?? null;
            $email = isset($_POST['email']) ?? null;
            $password = isset($_POST['password']) ?? null;
            $cpassword = isset($_POST['cpassword']) ?? null;
            $secret = "6LdUjlogAAAAAGUlnN--cpIn6IXJ8_8lRqO_NbRw";
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if (!empty($username) && !empty($email) && !empty($password) && !empty($cpassword)) {
                if ($username != 'admin') {
                    if (strlen($password) >= 8 && $password == $cpassword) {
                        $data = [
                            "username" => "$username",
                            "email" => "$email",
                            "password" => "$password",
                            "status" => "false",
                            "role" => "user"
                        ];
                    }
                }
                if ($responseData->success) {
                    $this->accountModel->addAccount($data);
                    header('Location: index.php?controller=login');
                } else {
                    echo "<script> alert('no captcha'); </script>";
                    header('Location: index.php?controller=register');
                }
            }
        }
    }
}
