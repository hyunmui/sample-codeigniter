<?php
defined('BASEPATH') || exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$privateBlocks = array(
    'Member' => array('detail')
);

$hook['post_controller_constructor'] = array(
    'class'    => 'PermissionHook',
    'function' => 'checkPrivatePermission',
    'filename' => 'PermissionHook.php',
    'filepath' => 'hooks',
    'params'   => $privateBlocks
);