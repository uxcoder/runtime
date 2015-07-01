<?php


class AppModel
{
        public function __construct()
        {
                $this->database = new AppDatabase();
        }
}