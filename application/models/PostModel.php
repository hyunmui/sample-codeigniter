<?
defined('BASEPATH') || exit('No direct script access allowed');

class PostModel extends CI_Model
{
    const TABLE_NAME = 'Posts';

    public $id;
    public $post_type;
    public $title;
    public $content;
    public $writer;
    public $data_status;
    public $created_date;
    public $updated_date;

    public function getOne($id)
    {
        $query = $this->db->get_where(self::TABLE_NAME, array('id' => $id), 1);
        return $query->row(0, 'PostModel');
    }

    public function findPosts($searchType, $searchKeyword, $pageIndex, $pageSize)
    {
        // TODO: 미사용 파라미터 조건 추가
        $query = $this->db->query('exec FindPosts ?', array($searchKeyword));
        return $query->result();
    }

    public function add()
    {
        $this->db->insert(self::TABLE_NAME, $this);
    }

    public function update()
    {
        $this->db->update(self::TABLE_NAME, $this);
    }
}

/* End of file PostModel.php */
