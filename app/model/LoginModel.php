<?php

class LoginModel extends AppModel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserData($email, $password)
    {
        $sql = 'SELECT *
                FROM user
                WHERE email = :email
                AND password = :password';

        $stmt = $this->database->prepare($sql);
        $stmt->execute([
            ':email' => $email,
            ':password' => MD5($password)
        ]);

        $count = $stmt->rowCount();
        if ($count > 0) {
            Session::init();
            Session::set('authorized', true);
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
            Session::set('user', $data);
        } else {
            $data = [];
        }

        return $data;
    }
}