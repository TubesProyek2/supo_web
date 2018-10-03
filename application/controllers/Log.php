<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller
{
    public function in()
    {
        if($this->session->role=='admin')
        { redirect('admin','refresh'); }

        if(isset($_POST['button']))
        {
            $data = [
                'username' => $this->input->post('user'),
                'password' => $this->input->post('pass')
            ];
            
            $admin = $this->Admin_model->check($data);
            if(!empty($admin))
            {
                $log = [
                    'id' => $admin->id_admin,
                    'name' => $admin->name,
                    'username' => $admin->username,
                    'role' => $admin->privileges
                ];
                $this->session->set_userdata($log);

                echo "<script>alert('Welcome ".$this->session->username."');</script>";
			    echo "<meta http-equiv=refresh content=0;url=".site_url('admin').">";
            }
            else
            {
                echo "<script>alert('Username atau Password Anda Salah!');</script>";
		        echo "<meta http-equiv='refresh' content='0;url=".site_url('log/in')."' />";
            }
        }
        else
        { $this->load->view('log'); }
        
    }

    public function out()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}

/* End of file Log.php */

?>