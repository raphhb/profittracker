<?php

class Login
{
    use Controller;

    public function index()
    {
        $users = new UserModel;
        $data = [];

        if (isset($_SESSION['admin'])) {
            redirect('Home');
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $arr['Email'] = $_POST['email'];
            $row = $users->first($arr);

            if ($row) {
                if ($row->password === $_POST['password']) {
                    
                    $_SESSION['admin'] = $row;
                    $_SESSION['user_id'] = $row->UserID; // Set user_id in session
                    $user = new UserModel();
                    $dailyNotif = $user->executeMonthlyNotif();
                    redirect('Home');
                } else {
                    $users->errors['password'] = "Incorrect password";
                }
            } else {
                $users->errors['email'] = "Account doesn't exist";
            }

            $data['errors'] = $users->errors;
        }

        $this->view('login', $data);
    }
}
?>
