<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        if($this->session->role!='admin')
        {
            echo "<script>alert('Harap Anda Login Sebagai Admin!');</script>";
            echo "<meta http-equiv='refresh' content='0;url=".site_url('log/in')."' />";
            redirect('log/in','refresh');
        }
    }

    public function stat($id)
    {
        $data['status'] = 'BUKAN SPAM';
        
        if($this->Comment_model->stat($id,$data))
        { $this->session->set_flashdata('notif','Konfirmasi Berhasil!'); }
        else
        { $this->session->set_flashdata('notif','Konfirmasi Gagal!'); }

        redirect('admin/comment','refresh');
    }

    public function delete($id)
    {
        if($this->Comment_model->delete($id))
        { $this->session->set_flashdata('notif','Hapus Komentar Berhasil!'); }
        else
        { $this->session->set_flashdata('notif','Hapus Komentar Gagal!'); }

        redirect('admin/comment','refresh');
    }
}
?>