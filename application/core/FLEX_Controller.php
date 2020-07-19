<?
defined('BASEPATH') || exit('No direct script access allowed');

class FLEX_Controller extends CI_Controller {

    /**
     * 
     * @var FLEX_Loader
     */
    public $load;

    /**
     * 
     * @var FLEX_Session
     */
    public $session;

    /**
     * 
     * @var MemberService
     */
    protected $memberService;
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MemberModel');
        $this->memberService = $this->load->service('MemberService', array('MemberModel' => $this->MemberModel));
        $this->load->library('session', array('MemberService' => $this->memberService));
    }
    
}

/* End of file FLEX_Controller.php */
