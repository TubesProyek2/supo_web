<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
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
        if (isset($_POST['button']))
        {
            if ($this->upload->do_upload('photo'))
            {
                $data = [
                    'title' => $this->input->post('title'),
                    'headline' => $this->input->post('headline'),
                    'about' => $this->input->post('about'),
                    'photo' => $this->upload->data('file_name'),
                    'author' => $this->input->post('author'),
                    'date' => date("Y-m-d")
                ];
    
                if($this->News_model->insert($data))
                { $this->session->set_flashdata('notif','Tambah Berita Berhasil!'); }
                else
                { $this->session->set_flashdata('notif','Tambah Berita Gagal!'); }
    
                redirect('admin/news','refresh');
            }
            else
            {
                $data['page']='create';
                $this->load->view('admin/news', $data);
            }
        }
        else
        {
            $data['page']='create';
            $this->load->view('admin/news', $data);
        }
    }

    public function update($id)
    {
        if (isset($_POST['button']))
        {
            $data = [
                'title' => $this->input->post('title'),
                'headline' => $this->input->post('headline'),
                'about' => $this->input->post('about'),
                'author' => $this->input->post('author'),
                'date' => date("Y-m-d")
            ];

            if ($this->upload->do_upload('photo'))
            {
                $delpic = $this->News_model->where($id);
                unlink('./assets/foto/'.$delpic->photo);

                $data['photo'] = $this->upload->data('file_name');
            }
            
            if($this->News_model->update($id,$data))
            { $this->session->set_flashdata('notif','Update Berita Berhasil!'); }
            else
            { $this->session->set_flashdata('notif','Update Berita Gagal!'); }

            redirect('admin/news','refresh');
        }
        else
        {
            $data = [
                'page' => 'update',
                'data' => $this->News_model->where($id)
            ];
            $this->load->view('admin/news', $data);
        }
    }

    public function delete($id)
    {
        $delpic = $this->News_model->where($id);
        unlink('./assets/foto/'.$delpic->photo);

        if($this->News_model->delete($id))
        { $this->session->set_flashdata('notif','Hapus Berita Berhasil!'); }
        else
        { $this->session->set_flashdata('notif','Hapus Berita Gagal!'); }

        redirect('admin/news','refresh');
    }
}
?>