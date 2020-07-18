<?
defined('BASEPATH') || exit('No direct script access allowed');

class Posts extends FLEX_Controller
{
    private $postService;

    public function __construct()
    {
        parent::__construct();
        $this->postService = $this->load->service('PostService');
    }

    public function index($searchType = 'all', $searchKeyword = '', $pageIndex = 1, $pageSize = 10)
    {
        $posts = $this->postService->getPosts($searchType, $searchKeyword, $pageIndex, $pageSize);

        $this->load->viewmodel('posts/PostListViewModel');
        $viewModel = new PostListViewModel($posts, $searchType, $searchKeyword, $pageIndex, $pageSize);

        $this->load->clientTemplate('posts/list', $viewModel);
    }

    public function detail($postId)
    {
        $this->load->viewmodel('posts/PostDetailViewModel');
        $viewModel = new PostDetailViewModel($this->postService->getPost($postId));
        
        $this->load->clientTemplate('posts/detail', $viewModel);
    }
}

/* End of file Posts.php */