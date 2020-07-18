<? 
defined('BASEPATH') || exit('No direct script access allowed');

class PostDetailViewModel  {

    public $post;       // PostModel

    
    public function __construct($post)
    {
        $this->post = $post;
    }
    
}

/* End of file PostDetailViewModel.php */
