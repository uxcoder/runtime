<?php

class PlanController extends AppController
{
        public function __construct()
        {
                parent::__construct();
        }

        public function run()
        {
                $this->view->render('plan.tpl', NULL);
        }

}