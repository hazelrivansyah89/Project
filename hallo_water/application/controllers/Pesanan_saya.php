<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_transaksi');
        $this->load->model('m_pesanan_masuk');
    }

    public function index()
    {
        $data = array(
            'title' => 'Pesanan Saya',
            'belum_bayar' => $this->M_transaksi->belum_bayar(),
            'diproses' => $this->M_transaksi->diproses(),
            'dikirim' => $this->M_transaksi->dikirim(),
            'selesai' => $this->M_transaksi->selesai(),
            'isi' => 'v_pesanan_saya',
        );

        $this->load->view('layout/v_wraper_frontend', $data, FALSE);
    }
    public function bayar($id_transaksi)
    {
        $this->form_validation->set_rules(
            'atas_nama',
            'atas_nama',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );

        if ($this->form_validation->run() == TRUE) {
            $config['upload_path'] = './assets/bukti_bayar/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|ico|jfif';
            $config['max_size']     = '2000';
            $this->upload->initialize($config);
            $field_name = 'bukti_bayar';
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'title' => 'Pembayaran',
                    'pesanan' => $this->M_transaksi->detail_pesanan($id_transaksi),
                    'rekening' => $this->M_transaksi->rekening(),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'v_bayar',
                );

                $this->load->view('layout/v_wraper_frontend', $data, FALSE);
            } else {
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/bukti_bayar/' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);

                $data = array(
                    'id_transaksi' => $id_transaksi,
                    'atas_nama' => $this->input->post('atas_nama'),
                    'nama_bank' => $this->input->post('nama_bank'),
                    'no_rek' => $this->input->post('no_rek'),
                    'status_bayar' => '1',
                    'bukti_bayar' => $upload_data['uploads']['file_name'],
                );
                $this->M_transaksi->upload_bukti_bayar($data);
                $this->session->set_flashdata('pesan', 'Data pembayaran berhasil diupload ');
                redirect('pesanan_saya');
            }
        }
        $data = array(
            'title' => 'Pembayaran',
            'pesanan' => $this->M_transaksi->detail_pesanan($id_transaksi),
            'rekening' => $this->M_transaksi->rekening(),
            'isi' => 'v_bayar',
        );

        $this->load->view('layout/v_wraper_frontend', $data, FALSE);
    }
    public function diterima($id_transaksi)
    {
        $data = array(
            'id_transaksi' => $id_transaksi,
            'status_order' => '3',
        );

        $this->m_pesanan_masuk->update_order($data);
        $this->session->set_flashdata('pesan', 'Pesanan telah diterima');

        redirect('pesanan_saya');
    }
}
