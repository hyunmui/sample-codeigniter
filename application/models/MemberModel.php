<?
defined('BASEPATH') or exit('No direct script access allowed');

class MemberModel extends CI_Model
{

    const TABLE_NAME = 'Members';

    /**
     * 회원 아이디
     * @var string
     */
    public $member_id;
    /**
     * 비밀번호
     * @var string
     */
    public $password;
    /**
     * 회원 이름
     * @var string
     */
    public $first_name;
    /**
     * 회원 성
     * @var string
     */
    public $last_name;
    /**
     * 권한 코드
     * @var integer 'admin', 'member'
     */
    public $role_code;
    /**
     * 데이터 상태
     * @var bool
     */
    public $data_status;
    /**
     * 가입일
     * @var DateTime
     */
    public $create_date;
    /**
     * 정보 수정일
     * @var DateTime
     */
    public $update_date;

    public function findById(string $memberId): MemberModel
    {
        $query = $this->db->get_where(self::TABLE_NAME, array('member_id' => $memberId));
        return $query->row(0, 'MemberModel');
    }

    public static function convertFromJson(string $json): MemberModel
    {
        $member = new MemberModel();
        $stdClass = json_decode($json);

        $reflector = new ReflectionClass('MemberModel');
        $properties = $reflector->getProperties();

        foreach ($properties as $prop) {
            $member->{$prop->getName()} = $stdClass->{$prop->getName()};
        }

        return $member;
    }
}

/* End of file MemberModel.php */
