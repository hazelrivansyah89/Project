<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pelanggan');
        $this->load->model('m_auth');
    }


    public function register()
    {
        $this->form_validation->set_rules(
            'nama_pelanggan',
            'nama_pelanggan',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );
        $this->form_validation->set_rules(
            'email',
            'email',
            'required|is_unique[tbl_pelanggan.email]',
            array(
                'required' => '%s Harus Diisi !!!',
                'is_unique' => '%s Email ini sudah terdaftar !!!'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'password',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );
        $this->form_validation->set_rules(
            'ulangi_password',
            'ulangi_password',
            'required|matches[password]',
            array(
                'required' => '%s Harus Diisi !!!',
                'matches' => '%s password tidak sama !!!'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Register',
                'isi' => 'login/v_register'
            );

            $this->load->view('layout/v_wraper_frontend', $data, FALSE);
        } else {
            $data = array(
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'foto' => 'foto.jpg',

            );
            $this->m_pelanggan->register($data);
            $this->session->set_flashdata('pesan', 'Selamat register anda berhasil, Silahkan login kembali');
            redirect('pelanggan/login');
        }
    }
    public function login()
    {
        $this->form_validation->set_rules(
            'email',
            'email',
            'required',
            array('required' => 'email Harus diisi!!!')
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array('required' => 'Password Harus diisi!!!')
        );

        if ($this->form_validation->run() ==  TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $this->pelanggan_login->login($email, $password);
        }

        $data = array(
            'title' => 'Login',
            'isi' => 'login/v_login'
        );

        $this->load->view('layout/v_wraper_frontend', $data, FALSE);
    }
    public function logout()
    {
        $this->cart->destroy();
        $this->pelanggan_login->logout();
    }
    public function akun()
    {
        //proteksi hal
        $this->pelanggan_login->proteksi_halaman();
        $data = array(
            'title' => 'Akun saya',
            'isi' => 'v_akun_saya'
        );

        $this->load->view('layout/v_wraper_frontend', $data, FALSE);
    }
    
}
        
    /* End of file  pelanggan.php */
