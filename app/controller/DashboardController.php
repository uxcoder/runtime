<?php

class DashboardController extends AppController
{
    public function __construct()
    {
        parent::__construct();

    }

    public function run()
    {
        $parameterId = 2;
        $dataModel = new DataModel();
        $userModel = new UserModel();
        Session::init();
        $userId = Session::get('user')['user_id'];
        $userData = $dataModel->getData($userId, $parameterId);
        $users = $userModel->run();
        $var = [
            'userData' => $userData,
            'users' => $users,
        ];
//            Session::init();
//            print_r($_SESSION);
        $this->view->render('dashboard.twig', $var);
    }

}