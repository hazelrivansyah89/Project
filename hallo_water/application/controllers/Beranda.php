<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Beranda extends CI_Controller {

public function __construct()
    {
        parent::__construct();
        // $this->load->model('m_admin');
        $this->load->model('m_artikel');
        
    }


    public function index()
    {

        $data = array(
            'title' => 'Dashboard',
            'artikel' => $this->m_artikel->artikel(),
            // 'total_kategori' => $this->m_admin->total_kategori(),
            'isi' => 'beranda/index'
        );

        $this->load->view('layout_beranda/v_wraper_beranda', $data, FALSE);
    }

    // public function artikel()
    // {

    //     $data = array(
    //         // 'total_barang' => $this->m_admin->total_barang(),
    //         // 'total_kategori' => $this->m_admin->total_kategori(),
    //         'isi' => 'beranda/index'
    //     );

    //     $this->load->view('layout_beranda/v_wraper_beranda', $data, FALSE);
    // }
        
}
        
    /* End of file  beranda.php */
        
                            