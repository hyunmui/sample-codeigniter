<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends FLEX_Controller {

    public function signIn()
    {
        echo 'haha';
    }

    public function detail($memberId)
    {
        echo 'MY PAGE';
    }

    public function signOut()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

}

/* End of file Member.php */
