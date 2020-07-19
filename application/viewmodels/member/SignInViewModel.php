<?
class SignInViewModel
{
    /**
     * 사용자 아이디
     * @var string
     */
    public $member_id;

    /**
     * 비밀번호
     * @var string
     */
    public $password;

    /**
     * 아이디 기억
     * @var bool
     */
    public $remember;

    /**
     * 자동 로그인
     * @var bool
     */
    public $auto_login;


    public function __construct($member_id = '', $password = '', $remember = false, $auto_login = false)
    {
        $this->member_id = $member_id;
        $this->password = $password;
        $this->remember = $remember;
        $this->auto_login = $auto_login;
    }
}
