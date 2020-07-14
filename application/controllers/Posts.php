<?
defined('BASEPATH') || exit('No direct script access allowed');

class Posts extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PostModel');
    }


    public function index($keyword = '')
    {
        $data['model'] = $this->PostModel->findByKeyword($keyword);
        $this->load->view('posts/list', $data);
    }

    public function detail($idx)
    {
        $data['model'] = $this->PostModel->getOne($idx);
        $this->load->view('posts/detail', $data);
    }
}

/* End of file Posts.php */