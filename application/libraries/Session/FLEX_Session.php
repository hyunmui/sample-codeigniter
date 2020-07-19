<?
defined('BASEPATH') OR exit('No direct script access allowed');

class FLEX_Session extends CI_Session {

    const KEY_SIGNIN = 'member';

    /**
     * 
     * @var MemberModel
     */
    private $member;
    
    public function __construct(array $params = array())
    {
        parent::__construct($params);
    }

    /**
     * 로그인 상태로 만듬
     * @param MemberModel $member 
     * @return void 
     */
    public function signIn(MemberModel $member)
    {
        $this->member = $member;
        $this->set_userdata(FLEX_Session::KEY_SIGNIN, $member);
    }

    public function signedMember($forcedRefresh = false)
    {
        if (!$this->member || $forcedRefresh) {
            $this->member = $this->userdata(FLEX_Session::KEY_SIGNIN);
        }

        return $this->member;
    }

    /**
     * 사용자 상태가 Login 상태인지 점검한다
     * @return false 
     */
    public function isSignIn() : bool
    {
        return $this->signedMember() !== null;
    }

    /**
     * 로그인 된 사람이 관리자인지 점검
     * @return bool 
     */
    public function isAdmin() : bool
    {
        return $this->member !== null && $this->member->role === 'admin';
    }
}

/* End of file FLEX_Session.php */
