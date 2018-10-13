<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    { parent::__construct(); }
    
    public function index()
    {
        $data['list'] = $this->News_model->get();
        $this->load->view('index',$data);
    }

    public function admin()
    { $this->load->view('admin'); }

    public function detail($id)
    {
        $data = [
            'data' =>  $this->News_model->where($id),
            'datakom' => $this->Comment_model->where_news($id)
        ];
        $this->load->view('detail', $data);
    }

    public function gallery()
    {
        $data['list'] = $this->Gallery_model->get();
        $this->load->view('gallery',$data);
    }

    public function game()
    { $this->load->view('game'); }
}
?>