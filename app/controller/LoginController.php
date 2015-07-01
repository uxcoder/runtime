<?php

class LoginController extends AppController
{
        public function __construct()
        {
                parent::__construct();
        }

        public function run()
        {
                $password = isset($_POST['password']) ? $_POST['password'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';

        

                $model = new LoginModel();
                $userData = $model->getUserData($email, $password);
//            print_r($_SESSION);
//                print_r($userData);

                $var = ['authorized' => !empty($userData)];
                if ($var['authorized']) {
                    header('location: dashboard');
                }
                $this->view->render('login.tpl', $var);
        }

}