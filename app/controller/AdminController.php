<?php

class AdminController extends AppController
{
        public function __construct()
        {
                parent::__construct();
                Session::init();
                $authorized = Session::get('authorized');
                if ($authorized === false || $authorized === null) {
                        Session::destroy();
                        ob_start();
                        header('location: login');
                        ob_flush();
                        ob_end_clean();
                        exit;
                }
        }

        private function handleRequest()
        {
            $result['message'] = '';
//            $job = isset($this->submit['action']) ? $this->submit['action'] : '';
            $job = $this->request->get('action');

            switch ($job) {
            case 'save':
                $parameterId = 2;
                $dataModel = new DataModel();
                $userId = Session::get('user')['user_id'];
                $dataModel->saveData($userId, $parameterId, $this->request->get('heart_rate'));
//                $dataModel->saveData(1, $this->submit['req']['heart_rate']);
                $result['message'] = 'Your data has been saved.';
                break;

            default:
            }
            return $result;
        }

        public function run()
        {
            $form = self::handleRequest();

            $var = [
                'message' => $form['message'],
            ];
            $this->view->render('admin.twig', $var);
        }

}