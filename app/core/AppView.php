<?php


class AppView
{
    const CONTENT_TEMPLATE = 'content.tpl';
    public function __construct()
        {
                $this->smarty = new Smarty;
                $this->smarty->setCompileDir('app/lib/smarty/templates_c');
        }

        public function render($template, $var = NULL)
        {
            Session::init();
            $authorized = Session::get('authorized');
            $var['authorized'] = $authorized;
            $var['user'] = Session::get('user');
//            if ($authorized === false || $authorized === null) {
//                Session::destroy();
//            }
            if (is_array($var)) {
                        foreach ($var as $key => $value) {
                                $this->smarty->assign($key, $value);
                        }
                }

            $output = $this->smarty->fetch(PATH_VIEW . '/' . $template);
                $this->smarty->assign('payload', $output);
                $this->smarty->display(PATH_VIEW . '/' . self::CONTENT_TEMPLATE);

        }
}