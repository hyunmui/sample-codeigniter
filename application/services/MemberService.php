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

}

/* End of file MemberService.php */