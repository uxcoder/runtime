<?php


class AppView
{
    const CONTENT_TEMPLATE = 'content.tpl';
    public function __construct()
        {
//                $this->smarty = new Smarty;
//                $this->smarty->setCompileDir('app/lib/smarty/templates_c');

        $loader = new Twig_Loader_Filesystem(PATH_VIEW);
        $this->twig = new Twig_Environment($loader);
        }


    public function render($template, $var = null)
    {
        if ($var === null) {
            $var = [];
        }
//        Session::init();
//            $authorized = Session::get('authorized');
//            $var['authorized'] = $authorized;
//            $var['user'] = Session::get('user');
//        print_r('hi!');
        $header = $this->twig->render('header.twig', $var);
        $footer = $this->twig->render('footer.twig', $var);
        $content = $this->twig->render($template, $var);
        echo $header . $content . $footer;
    }

//        public function render($template, $var = NULL)
//        {
//            Session::init();
//            $authorized = Session::get('authorized');
//            $var['authorized'] = $authorized;
//            $var['user'] = Session::get('user');
////            if ($authorized === false || $authorized === null) {
////                Session::destroy();
////            }
//            if (is_array($var)) {
//                        foreach ($var as $key => $value) {
//                                $this->smarty->assign($key, $value);
//                        }
//                }
//
//            $output = $this->smarty->fetch(PATH_VIEW . '/' . $template);
//                $this->smarty->assign('payload', $output);
//                $this->smarty->display(PATH_VIEW . '/' . self::CONTENT_TEMPLATE);
//
//        }
}