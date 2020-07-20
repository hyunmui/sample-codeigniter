<?
defined('BASEPATH') or exit('No direct script access allowed');

class Member extends FLEX_Controller
{

    /**
     * 로그인
     * @param string $memberId 
     * @param string $password 
     * @return void 
     */
    public function signIn($memberId = 'hyunmui', $password = '1234')
    {
        $this->load->viewmodel('member/SignInViewModel');
        $viewModel = new SignInViewModel($memberId, $password);
        $this->load->clientTemplate('member/signin', $viewModel);
    }

    /**
     * 로그인 확인 처리
     * @return void 
     */
    public function signInProcess()
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

        // TODO: 임시로 내 정보 페이지로 이동
        redirect('/member/' . $memberId);
    }

    /**
     * 로그아웃
     * @return void 
     */
    public function signOut()
    {
        $this->session->sess_destroy();

        // TODO: 임시로 로그인 페이지로 다시 이동
        redirect('/member/sign-in');
    }

    /**
     * 내 정보
     * @param string $memberId 
     * @return void 
     */
    public function detail(string $memberId)
    {
        $signedMember = $this->session->signedMember();
        if ($signedMember->member_id !== $memberId) {
            show_error('접근 권한이 없습니다', 403, 'Permission Denied');
        }

        $this->load->clientTemplate('member/detail', array('model' => $signedMember));
    }

    /**
     * 회원 정보 수정
     * @return void 
     */
    public function update()
    {
        # code...
    }

    /**
     * 회원 정보 수정 처리
     * @return void 
     */
    public function updateProcess()
    {
        # code...
    }

    /**
     * 회원 탈퇴
     * @return void 
     */
    public function leave()
    {
        # code...
    }

    /**
     * 회원 탈퇴 처리
     * @return void 
     */
    public function leaveProcess()
    {
        # code...
    }
}

/* End of file Member.php */
