<?
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends FLEX_Controller
{

    public function index()
    {
        $this->page('ktrolster');
    }

    public function page($galleryName)
    {
        $this->load->viewmodel('gallery/GalleryViewModel');
        $viewModel = new GalleryViewModel($galleryName);

        $this->load->clientTemplate('gallery/index', $viewModel);
    }
}

/* End of file Board.php */
