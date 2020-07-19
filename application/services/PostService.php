<?php

class PostService
{
    private $postModel;

    /**
     * 
     * @param array $injectParams 'PostModel'
     * @return void 
     */
    public function __construct($injectParams)
    {
        $this->postModel = $injectParams['PostModel'];
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
        return $this->postModel->findPosts($searchType, $searchKeyword, $pageIndex, $pageSize);
    }

    /**
     * 게시글 1개의 정보를 불러온다
     * 
     * @param mixed $postId 
     * @return mixed 
     */
    public function getPost($postId)
    {
        return $this->postModel->getOne($postId);
    }
}
