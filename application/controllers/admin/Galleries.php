<?
defined('BASEPATH') or exit('No direct script access allowed');

class Galleries extends FLEX_Controller
{

    public function index()
    {
        $this->load->view('admin/galleries');
    }
}

/* End of file Galleries.php */
