<?
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends FLEX_Controller
{

    public function signIn($memberId = 'hyunmui', $password = '1234')
    {
        $this->load->viewmodel('member/SignInViewModel');
        $viewModel = new SignInViewModel($memberId, $password);
        $this->load->clientTemplate('member/signin', $viewModel);
    }

    public function processSignIn()
    {
        $this->load->viewmodel('member/SignInViewModel');
        $memberId = $this->input->post('member_id');
        $password = $this->input->post('password');
        // TODO: 로직 추가 필요 : 아이디저장 / 자동로그인

        $member = $this->memberService->signIn($memberId, $password);

        if ($member == null) {
            $this->signIn($memberId, $password);
            return;
        }

        $this->session->signIn($member);

        redirect('/member/' . $memberId);
    }

    public function detail(string $memberId)
    {
        $signedMember = $this->session->signedMember();
        if ($signedMember->member_id !== $memberId) {
            show_error('접근 권한이 없습니다', 403, 'Permission Denied');
        }

        $this->load->clientTemplate('member/detail', array('model' => $signedMember));
    }

    public function signOut()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}

/* End of file Member.php */
