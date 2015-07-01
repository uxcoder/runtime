<?php


class Session
{
        public static function init()
        {
            if (!isset($_SESSION)) {
                session_start();
            }
        }

        public static function set($key, $value)
        {
                $_SESSION[$key] = $value;
        }

        public static function get($key)
        {
                return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
        }

        public static function destroy()
        {
            if (isset($_SESSION)) {
                unset($_SESSION);
                session_destroy();
            }

        }
}

