<?php

class UserModel extends AppModel
{
        public function __construct()
        {
                parent::__construct();
        }

        public function run()
        {
                $sql = $this->database->prepare('SELECT firstname, lastname FROM user');
                $sql->execute();
                $data = $sql->fetchAll(PDO::FETCH_ASSOC);
                return $data;
        }
}