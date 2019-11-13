<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    /**
     * Authentication view
     */
    public function index($param="")
    {
        if ($param == 'callback') {
            $data['page_name'] = 'login_callback';
            $this->load->view('index', $data);
        }
        else if ($param == 'redirect') {
            if ($_GET) {
                $data['user_data'] = $this->verify($_GET);
            }
            $data['page_name'] = 'login_redirect';
            $this->load->view('index', $data);
        }
        else {
            $data['page_name'] = 'login_callback';
            $this->load->view('index', $data);;
        }
       
    }

    /**
     * verify authentication requests
     */
    public function verify($data)
    {
        $check_hash = $data['hash'];
        unset($data['hash']);
        $data_check_arr = [];
        foreach ($data as $key => $value) {
            $data_check_arr[] = $key . '=' . $value;
        }
        sort($data_check_arr);
        $data_check_string = implode("\n", $data_check_arr);
        $secret_key = hash('sha256', "919284763:AAGN88fNKKJ293CEP45AQj2EnuLWgH2Je1E", true);
        $hash = hash_hmac('sha256', $data_check_string, $secret_key);
        if (strcmp($hash, $check_hash) !== 0) {
            unset($data);
            $data['error'] = "Data is not from Telegram";
            return $data;
        }
        if ((time() - $data['auth_date']) > 86400) {
            unset($data);
            $data['error'] = "Data is Outdated";
            return $data;
        }
        $data['error'] = null;
        return $data;
       
    }
    
}
