<?
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberService {

    /**
     * 
     * @var MemberModel
     */
    private $memberModel;

    public function __construct($injectParams) {
        $this->memberModel = $injectParams['MemberModel'];
    }

    public function signIn($memberId, $password)
    {
        $member = $this->memberModel->findById($memberId);
        return $member->password === $password ? $member : null;
    }

}

/* End of file MemberService.php */