<?
defined('BASEPATH') or exit('No direct script access allowed');

class PermissionHook
{
    public function checkPrivatePermission(array $privateBlocks)
    {
        $CI = &get_instance();

        if (!$this->hasPermission($CI->session, $CI->router, $privateBlocks)) {
            show_error('허용권한이 없습니다', 403, 'Permission Denied');
        }
    }

    private function hasPermission(FLEX_Session $session, CI_Router $router, array $privateBlocks) : bool
    {
        foreach ($privateBlocks as $class => $actions) {
            if (strtolower($class) == strtolower($router->class)
                && in_array($router->method, $actions) && !$session->isSignIn()) {
                return false;
            }
        }

        return true;
    }
}

/* End of file PermissionHook.php */
