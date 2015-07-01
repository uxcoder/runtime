<?php

/**
 * Main Controller
 */

class AppController
{
        public function __construct()
        {
//            $this->submit = $_POST;
            $this->request = new AppRequest();
            $this->view = new AppView();
        }

}