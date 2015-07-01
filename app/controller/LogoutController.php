<?php

class LogoutController extends AppController
{
        public function __construct()
        {
                parent::__construct();
        }

        public function run()
        {
            Session::init();
            Session::destroy();
            header('location: dashboard');
        }

}