<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model
{
    public function get()
    { return $this->db->get('comment')->result(); }

    public function stat($id,$data)
    { return $this->db->update('comment', $data, ['id_comment'=>$id]); }

    public function insert($data)
    { return $this->db->insert('comment', $data); }

    public function where($id)
    { return $this->db->get_where('comment', ['id_comment'=>$id])->row(); }

    public function update($id,$data)
    { return $this->db->update('comment', $data, ['id_comment'=>$id]); }

    public function delete($id)
    { return $this->db->delete('comment', ['id_comment'=>$id]); }
}
?>