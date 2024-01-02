<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_transaksi');
    }
    public function index()
    {
        if (empty($this->cart->contents())) {
            redirect('home');
        }
        $data = array(
            'title' => 'Keranjang Belanja',
            'isi' => 'v_belanja'
        );

        $this->load->view('layout/v_wraper_frontend', $data, FALSE);
    }
    public function add()
    {
        $this->pelanggan_login->proteksi_halaman();

        $redirect_page = $this->input->post('redirect_page');
        $data = array(
            'id'      => $this->input->post('id'),
            'qty'     => $this->input->post('qty'),
            'price'   => $this->input->post('price'),
            'name'    => $this->input->post('name'),
        );

        $this->cart->insert($data);

        redirect($redirect_page, 'refresh');
    }
    public function delete($rowid)
    {
        $this->cart->remove($rowid);
        redirect('belanja');
    }

    public function update()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'rowid' => $items['rowid'],
                'qty'   => $this->input->post($i . '[qty]'),

            );

            $this->cart->update($data);
            $i++;
        }
        $this->session->set_flashdata('pesan', 'Keranjang berhasil di update');
        redirect('belanja');
    }
    public function clear()
    {
        $this->cart->destroy();
        redirect('belanja');
    }
    public function cekout()
    {
        $this->pelanggan_login->proteksi_halaman();

        $this->form_validation->set_rules(
            'provinsi',
            'Provinsi',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );
        $this->form_validation->set_rules(
            'kota',
            'kota',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );
        $this->form_validation->set_rules(
            'expedisi',
            'expedisi',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );
        $this->form_validation->set_rules(
            'paket',
            'paket',
            'required',
            array('required' => '%s Harus Diisi !!!')
        );


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Cek Out Belanja',
                'isi' => 'v_cekout'
            );

            $this->load->view('layout/v_wraper_frontend', $data, FALSE);
        } else {
            //simpan ke tabel transaksi
            $data = array(
                'id_pelanggan' => $this->session->userdata('id_pelanggan'),
                'no_order' => $this->input->post('no_order'),
                'tgl_order' => date('y-m-d'),
                'nama_penerima' => $this->input->post('nama_penerima'),
                'hp_penerima' => $this->input->post('hp_penerima'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
                'alamat' => $this->input->post('alamat'),
                'kode_pos' => $this->input->post('kode_pos'),
                'expedisi' => $this->input->post('expedisi'),
                'paket' => $this->input->post('paket'),
                'estimasi' => $this->input->post('estimasi'),
                'ongkir' => $this->input->post('ongkir'),
                'berat' => $this->input->post('berat'),
                'grand_total' => $this->input->post('grand_total'),
                'total_bayar' => $this->input->post('total_bayar'),
                'status_bayar' => '0',
                'status_order' => '0',
            );
            $this->M_transaksi->simpan_transaksi($data);
            //simpan ketabel rince transaksi
            $i = 1;

            foreach ($this->cart->contents() as $item) {
                $data_rinci = array(
                    'no_order' => $this->input->post('no_order'),
                    'id_barang' => $item['id'],
                    'qty' => $this->input->post('qty' . $i++),
                );
                $this->M_transaksi->simpan_rinci_transaksi($data_rinci);
            }



            $this->session->set_flashdata('pesan', 'Pesanan berhasil diproses');
            $this->cart->destroy();

            redirect('pesanan_saya');
        }
    }
}
        
    /* End of file  belanja.php */
