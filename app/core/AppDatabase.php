<?php

class AppDatabase extends PDO
{
        public function __construct()
        {
                try {
                        parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
                } catch(PDOException $e) {
                        trigger_error('Database connection failed: ' . $e->getMessage(), E_USER_ERROR);
                }
        }
}
