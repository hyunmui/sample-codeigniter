<?
defined('BASEPATH') OR exit('No direct script access allowed');

class FLEX_Session extends CI_Session {

    const KEY_SIGNIN = 'member';

    /**
     * 
     * @var MemberService
     */
    private $memberService;
    
    public function __construct(array $params = array())
    {
        parent::__construct($params);
        $this->memberService = $params['MemberService'];
    }

    /**
     * 사용자 상태가 Login 상태인지 점검한다
     * @return false 
     */
    public function isSignIn() : bool
    {
        return $this->userdata(FLEX_Session::KEY_SIGNIN) !== null;
    }

}

/* End of file FLEX_Session.php */
