<?
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends FLEX_Controller
{

    public function index()
    {
        $this->page('ktrolster');
    }

    /**
     * 갤러리 보기
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function page(string $galleryName)
    {
        $this->load->viewmodel('gallery/GalleryViewModel');
        $viewModel = new GalleryViewModel($galleryName);

        $this->load->clientTemplate('gallery/index', $viewModel);
    }

    /**
     * 갤러리 개설
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function create(string $galleryName)
    {
        # code...
    }

    /**
     * 갤러리 개설 처리
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function createProcess(string $galleryName)
    {
        # code...
    }

    /**
     * 갤러리 정보 변경
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function update(string $galleryName)
    {
        # code...
    }

    /**
     * 갤러리 정보 변경 처리
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function updateProcess(string $galleryName)
    {
        # code...
    }

    /**
     * 갤러리 삭제
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function remove(string $galleryName)
    {
        # code...
    }

    /**
     * 갤러리 삭제 처리
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function removeProcess(string $galleryName)
    {
        # code...
    }
}

/* End of file Board.php */
