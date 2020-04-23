<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CT_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->output->enable_profiler(true);
        $data['first']= '';
        $data['second']= '';
        $this->load->view('welcome_message', $data);
    }
}
