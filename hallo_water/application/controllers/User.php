<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
        $this->load->model('m_pelanggan');
        //Load Dependencies

    }

    // List all your items
    public function index($offset = 0)
    {
        $data = array(
            'title' => 'User',
            'user' => $this->m_pelanggan->get_all_data(),
            'isi' => 'v_user'
        );

        $this->load->view('layout/v_wraper_backend', $data, FALSE);
    }

    // Add a new item
    public function add()
    {
        $data = array(
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id'),
        );
        $this->m_pelanggan->add($data);
        $this->session->set_flashdata('pesan','Data berhasil ditambahkan');
        redirect('user');
    }

    //Update one item
    public function edit($id_pelanggan = NULL)
    {
        $data = array(
            'id_pelanggan' => $id_pelanggan,
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            'role_id' => $this->input->post('role_id'),
        );
        $this->m_pelanggan->edit($data);
        $this->session->set_flashdata('pesan','Data berhasil diedit');
        redirect('user');
    }

    //Delete one item
    public function delete($id_pelanggan=NULL)
    {
        $data = array('id_pelanggan' => $id_pelanggan);
        $this->m_pelanggan->delete($data);
        $this->session->set_flashdata('pesan','Data berhasil dihapus');
        redirect('user');
    }
    
}

/* End of file Controllername.php */
