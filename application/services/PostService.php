<?php

class PostService extends FLEX_Service
{
    
    public function __construct($CI)
    {
        parent::__construct($CI);

        if ($CI) {
            $this->CI = $CI;
            $this->CI->load->model('PostModel');
        }
    }

    /**
     * 게시글 여러개의 정보를 불러온다
     * 
     * @param mixed $searchType 검색 조건
     * @param mixed $searchKeyword 검색 키워드
     * @param mixed $pageIndex 현재 페이지
     * @param mixed $pageSize 페이지 사이즈
     * @return mixed 
     */
    public function getPosts($searchType, $searchKeyword, $pageIndex, $pageSize)
    {
        return $this->CI->PostModel->findPosts($searchType, $searchKeyword, $pageIndex, $pageSize);
    }

    /**
     * 게시글 1개의 정보를 불러온다
     * 
     * @param mixed $postId 
     * @return mixed 
     */
    public function getPost($postId)
    {
        return $this->CI->PostModel->getOne($postId);
    }
}
