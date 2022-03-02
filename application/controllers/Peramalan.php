<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peramalan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();

        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = "Prediksi Peramalan";
        $this->template->load('templates/dashboard', 'peramalan/predik', $data );
    }
    public function satu()
    {
        $data['title'] = "Prediksi Peramalan";
        $this->template->load('templates/dashboard', 'peramalan/exponentialsmoothing', $data);
    }
    public function dua()
    {
        $data['title'] = "Prediksi Peramalan";
        $this->template->load('templates/dashboard', 'peramalan/perhitungan', $data);
    }
    public function metode()
    {
        $data['title'] = "Prediksi Peramalan";
        $this->template->load('templates/dashboard', 'peramalan/metode', $data);
    }
}