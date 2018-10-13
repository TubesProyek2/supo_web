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

    public function create()
    {
        $id=$this->input->post('id_news');
        $data = [
            'id_news' => $id,
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'comment' => $this->input->post('comment'),
            'date' => date("Y-m-d"),
            'status' => "-"
        ];

        if($this->Comment_model->insert($data))
        { $this->session->set_flashdata('notif','Tambah Komentar Berhasil! Komentar akan ditampilkan setelah terverifikasi!'); }
        else
        { $this->session->set_flashdata('notif','Tambah Komentar Gagal!'); }

        redirect('home/detail/'.$id,'refresh');
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