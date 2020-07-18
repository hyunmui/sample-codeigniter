<?
defined('BASEPATH') || exit('No direct script access allowed');

class PostListViewModel
{
    public $posts;      // post array

    public $searchType;
    public $searchKeyword;

    public $pageIndex;
    public $pageSize;

    public function __construct($posts, $searchType, $searchKeyword, $pageIndex, $pageSize)
    {
        $this->posts = $posts;
        $this->searchType = $searchType;
        $this->searchKeyword = $searchKeyword;
        $this->pageIndex = $pageIndex;
        $this->pageSize = $pageSize;
    }
}

/* End of file PostListViewModel.php */
