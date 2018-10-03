<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
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

    public function index()
    { $this->load->view('admin/index'); }

    public function admin()
    {
        $data = [
            'page' => '',
            'list' => $this->Admin_model->get()
        ];
        $this->load->view('admin/admin', $data);
    }
    
    public function comment()
    {
        $data['list'] = $this->Comment_model->get();
        $this->load->view('admin/comment', $data);
    }
    
    public function gallery()
    {
        $data = [
            'page' => '',
            'list' => $this->Gallery_model->get()
        ];
        $this->load->view('admin/gallery', $data);
    }

    public function news()
    {
        $data = [
            'page' => '',
            'list' => $this->News_model->get()
        ];
        $this->load->view('admin/news', $data);
    }

    public function log_out()
    {
        $this->load->view('admin/logout');
    }

    /////////////////////////////////////////////////////

    public function create()
    {
        if (isset($_POST['button']))
        { 
            $data = [
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
                'privileges' => 'admin'
            ];

            if($this->Admin_model->insert($data))
            { $this->session->set_flashdata('notif','Tambah Admin Berhasil!'); }
            else
            { $this->session->set_flashdata('notif','Tambah Admin Gagal!'); }

            redirect('admin/admin','refresh');
        }
        else
        {
            $data['page']='create';
            $this->load->view('admin/admin', $data);
        }
    }

    public function update($id)
    {
        if (isset($_POST['button']))
        {
            $data = [
                'name' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email'),
            ];

            if ($this->Admin_model->update($id,$data))
            { $this->session->set_flashdata('notif','Update Admin Berhasil!'); }
            else
            { $this->session->set_flashdata('notif','Update Admin Gagal!'); }

            redirect('admin/admin','refresh');
        }
        else
        {
            $data = [
                'data' => $this->Admin_model->where($id),
                'page' => 'update'
            ];
            $this->load->view('admin/admin', $data);
        }
    }

    public function delete($id)
    {
        if($this->Admin_model->delete($id))
        { $this->session->set_flashdata('notif','Hapus Admin Berhasil!'); }
        else
        { $this->session->set_flashdata('notif','Hapus Admin Gagal!'); }

        redirect('admin/admin','refresh');
    }
}
?>