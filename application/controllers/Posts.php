<?
defined('BASEPATH') || exit('No direct script access allowed');

/**
 * 게시글
 * @package 
 */
class Posts extends FLEX_Controller
{
    private $postService;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PostModel');
        $this->postService = $this->load->service('PostService', array('PostModel' => $this->PostModel));
    }

    /**
     * 게시글 페이지
     * @param string $searchType 
     * @param string $searchKeyword 
     * @param int $pageIndex 
     * @param int $pageSize 
     * @return void 
     */
    public function index($searchType = 'all', $searchKeyword = '', $pageIndex = 1, $pageSize = 10)
    {
        $posts = $this->postService->getPosts($searchType, $searchKeyword, $pageIndex, $pageSize);

        $this->load->viewmodel('posts/PostListViewModel');
        $viewModel = new PostListViewModel($posts, $searchType, $searchKeyword, $pageIndex, $pageSize);

        $this->load->clientTemplate('posts/list', $viewModel);
    }

    /**
     * 게시글 상세
     * @param int $postId 게시글 ID
     * @return void 
     */
    public function detail(int $postId)
    {
        $this->load->viewmodel('posts/PostDetailViewModel');
        $viewModel = new PostDetailViewModel($this->postService->getPost($postId));

        $this->load->clientTemplate('posts/detail', $viewModel);
    }

    /**
     * 게시글 쓰기
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function write(string $galleryName)
    {
        # code...
    }

    /**
     * 게시글 쓰기 처리
     * @param string $galleryName 갤러리 이름
     * @return void 
     */
    public function writeProcess(string $galleryName)
    {
        # code...
    }

    /**
     * 게시글 수정
     * @param int $postId 게시글 ID
     * @return void 
     */
    public function modify($postId)
    {
        # code...
    }

    /**
     * 게시글 수정 처리
     * @param string $galleryName 갤러리 이름
     * @param int $postId 게시글 ID
     * @return void 
     */
    public function modifyProcess(string $galleryName, int $postId)
    {
        # code...
    }

    /**
     * 게시글 삭제
     * @return void 
     */
    public function remove()
    {
        # code...
    }
}

/* End of file Posts.php */