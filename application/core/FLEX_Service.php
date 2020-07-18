<?php
// defined('BASEPATH') || exit('No direct script access allowed');

abstract class FLEX_Service
{
    /**
     * 
     * @var CI_Controller
     */
    protected $CI;

    public function __construct($ci)
    {
        $this->CI = &get_instance();
    }
}
