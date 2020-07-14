<?
defined('BASEPATH') || exit('No direct script access allowed');

class PostModel extends CI_Model
{
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
        $query = $this->db->get_where('Posts', array('id' => $id), 1);
        return $query->row(0, 'PostModel');
    }

    public function findByKeyword($keyword)
    {
        $query = $this->db->query('exec FindPosts ?', array('keyword' => $keyword));
        return $query->result();
    }
}

/* End of file PostModel.php */
