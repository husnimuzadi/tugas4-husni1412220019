<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('Barang_model'); // Memuat model Barang_model
}

public function data_barang() {
    $data['title'] = 'Data Barang';
    $data['active_menu'] = 'data_barang';
    $data['barang'] = $this->Barang_model->get_all_barang();
    $data['content'] = $this->load->view('barang/list_barang', $data, true);

    $this->load->view('template/template', $data);
  }

  public function search_barang() {
    $keyword = $this->input->post('keyword');

    $data['title'] = 'Data Mahasiswa';
    $data['active_menu'] = 'data_barang';
    $data['barang'] = $this->Barang_model->search_data_barang($keyword);
    if (empty($data['barang'])) {
        $data['not_found'] = true; // Tandai bahwa data tidak ditemukan
    } else {
        $data['not_found'] = false;
    }
    $data['keyword'] = $keyword;
    $data['content'] = $this->load->view('barang/list_barang', $data, true);

    $this->load->view('template/template', $data);
  }
    public function ubah($id_barang) {
        $data['barang'] = $this->Barang_model->get_barang_by_id($id_barang);

        if (empty($data['barang'])) {
            show_404();
        }

        $this->load->view('ubah_barang', $data);
    }

    public function update() {
        $id_barang = $this->input->post('ID_Barang');
        $data = array(
            'Kode_Barang' => $this->input->post('Kode_Barang'),
            'Nama_Barang' => $this->input->post('Nama_Barang'),
            'Kategori_Barang' => $this->input->post('Kategori_Barang'),
            'Deskripsi_Barang' => $this->input->post('Deskripsi_Barang'),
            'Harga_Jual' => $this->input->post('Harga_Jual'),
            'Stok_Barang' => $this->input->post('Stok_Barang'),
            'Supplier_Barang' => $this->input->post('Supplier_Barang'),
            'Tanggal_Masuk' => $this->input->post('Tanggal_Masuk')
        );

        $this->Barang_model->update_barang($id_barang, $data);
        redirect('barang/data_barang');
    }

    public function hapus($id_barang) {
        $this->Barang_model->delete_barang($id_barang);
        redirect('barang/data_barang');
    }
}

