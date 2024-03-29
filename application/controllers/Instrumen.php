<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instrumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['form', 'my_input']);
    }

    public function index()
    {
        $this->load->view('partials/header');
        $this->load->view('pages/instrumen_form');
        $this->load->view('partials/footer');
    }

    public function proses()
    {

        if (($this->input->method() == 'post') && ($this->input->post('submit') == 'lihat_hasil')) {

            $input = ['usia', 'lama_dm', 'crt', 'abi', 'sensasi', 'kadar_gula', 'kondisi_kaki'];
            $post_data = get_post_data($input);

            // Hitung skor

            $data['total_skor'] = 0;

            foreach ($post_data as $x) {
                $data['total_skor'] += $x;
            }

            // keterangan dan advis

            $data['keterangan'] = '';
            $data['advis'] = [];

            $advis = [
                'ringan' => [
                    'Pertahankan kadar gula darah dalam batas normal melalui pengaturan diet',
                    'Lakukan olahraga teratur minimal 15 menit sehari',
                    'Istirahat yang cukup dan berkwalitas 6-8 jam sehari',
                    'Selalu memakai alas kaki secara baik dan benar',
                    'Menjaga kebersihan kaki secara mandiri dan memantau keadaan kaki secara teratur setiap hari',
                    'Lakukan perawatan luka secara aseptik dan antiseptik dengan prinsip mempertahankan <i>Moisturising</i>',
                    'Konsumsi obat dan atau insulin secara teratur sesuai dosis yang dianjurkan'
                ],
                'sedang' => [
                    'Pertahankan kadar gula darah dalam batas normal melalui pengaturan diet',
                    'Lakukan olahraga teratur minimal 15 menit sehari',
                    'Istirahat yang cukup dan berkwalitas 6-8 jam sehari',
                    'Selalu memakai alas kaki secara baik dan benar',
                    'Menjaga kebersihan kaki secara mandiri dan memantau keadaan kaki secara teratur setiap hari',
                    'Lakukan perawatan luka secara aseptik dan antiseptik dengan prinsip mempertahankan <i>Moisturising</i>',
                    'Konsumsi obat dan atau insulin secara teratur sesuai dosis yang dianjurkan',
                    'Rajin kontrol ke fasilitas kesehatan minimal 1 bulan sekali'
                ],
                'berat' => [
                    'Rujuk ke rumah sakit dengan fasilitas bedah yang memadai',
                    'Persiapan mental akan kehilangan bagian tubuh.'
                ]
            ];

            // pengelompokan berdasarkan skor

            if ($data['total_skor'] < 3) {
                $data['keterangan'] = 'risiko ringan';
                $data['advis'] = $advis['ringan'];
            } elseif ($data['total_skor'] >= 3 && $data['total_skor'] <= 9) {
                $data['keterangan'] = 'risiko sedang';
                $data['advis'] = $advis['sedang'];
            } else {
                $data['keterangan'] = 'risiko berat';
                $data['advis'] = $advis['berat'];
            }

            $data['skor_usia'] = $post_data['usia'];
            $data['skor_lama_dm'] = $post_data['lama_dm'];
            $data['skor_crt'] = $post_data['crt'];
            $data['skor_abi'] = $post_data['abi'];
            $data['skor_sensasi'] = $post_data['sensasi'];
            $data['skor_kadar_gula'] = $post_data['kadar_gula'];
            $data['skor_kondisi_kaki'] = $post_data['kondisi_kaki'];

            $this->load->view('partials/header');
            $this->load->view('pages/instrumen_hasil', $data);
            $this->load->view('partials/footer');
        } else {
            redirect();
        }
    }
}
