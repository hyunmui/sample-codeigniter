<?
defined('BASEPATH') or exit('No direct script access allowed');

class PermissionHook
{
    /**
     * FLEX Controller
     * 
     * @var FLEX_Controller
     */
    private $CI;

    public function __construct()
    {
        $this->CI = &get_instance();
    }


    /**
     * 개인 권한 체크
     * 
     * @param array $privateBlocks 개인 권한으로만 들어갈 수 있는 페이지 점검
     * @return void 권한 없으면 403 에러 발생
     */
    public function checkPrivatePermission(array $privateBlocks)
    {
        if ($this->CI->isAdminRequest()) {
            return;
        }

        foreach ($privateBlocks as $class => $actions) {
            if (
                strtolower($class) == strtolower($this->CI->router->class)
                && in_array($this->CI->router->method, $actions)
                && !$this->CI->session->isSignIn()
            ) {
                show_error('접근 권한이 없습니다', 403, 'Permission Denied');
            }
        }
    }

    /**
     * 관리자 페이지 권한 체크
     * 
     * @return void 
     */
    public function checkAdminPermission()
    {
        if (!$this->CI->isAdminRequest()) {
            return;
        }

        if (!$this->CI->session->isAdmin()) {
            show_error('접근 권한이 없습니다', 403, 'Permission Denied');
        }
    }
}

/* End of file PermissionHook.php */
