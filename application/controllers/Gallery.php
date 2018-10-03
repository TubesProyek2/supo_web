<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $config['upload_path']          = './assets/foto/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1500;
        $config['max_width']            = 1500;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);

        if($this->session->role!='admin')
        {
            echo "<script>alert('Harap Anda Login Sebagai Admin!');</script>";
            echo "<meta http-equiv='refresh' content='0;url=".site_url('log/in')."' />";
            redirect('log/in','refresh');
        }
    }

    public function create()
    {
        if(isset($_POST['button']))
        {
            if ($this->upload->do_upload('photo'))
            {
                $data = [
                    'photo' => $this->upload->data('file_name'),
                    'description' => $this->input->post('description')
                ];
    
                if($this->Gallery_model->insert($data))
                { $this->session->set_flashdata('notif','Tambah Galeri Berhasil!'); }
                else
                { $this->session->set_flashdata('notif','Tambah Galeri Gagal!'); }
    
                redirect('admin/gallery','refresh');
            }
            else
            {
                $data['page']='create';
                $this->load->view('admin/gallery', $data);
            }
        }
        else
        {
            $data['page']='create';
            $this->load->view('admin/gallery', $data);
        }
    }

    public function update($id)
    {
        if (isset($_POST['button']))
        {
            $data['description'] = $this->input->post('description');

            if ($this->upload->do_upload('photo'))
            {
                $delpic = $this->News_model->where($id);
                unlink('./assets/foto/'.$delpic->photo);

                $data['photo'] = $this->upload->data('file_name');
            }
            
            if($this->Gallery_model->update($id,$data))
            { $this->session->set_flashdata('notif','Update Galeri Berhasil!'); }
            else
            { $this->session->set_flashdata('notif','Update Galeri Gagal!'); }

            redirect('admin/gallery','refresh');
        }
        else
        {
            $data = [
                'page' => 'update',
                'data' => $this->Gallery_model->where($id)
            ];
            $this->load->view('admin/gallery', $data);
        }
    }

    public function delete($id)
    {
        $delpic = $this->Gallery_model->where($id);
        unlink('./assets/foto/'.$delpic->photo);

        if($this->Gallery_model->delete($id))
        { $this->session->set_flashdata('notif','Hapus Galeri Berhasil!'); }
        else
        { $this->session->set_flashdata('notif','Hapus Galeri Gagal!'); }

        redirect('admin/gallery','refresh');
    }
}
?>