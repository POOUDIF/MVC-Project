<?php

class About {
    public function index($nama = 'Daffa', $pekerjaan = 'Mahasiswa')
    {
        echo "Halo, Nama Saya $nama, Saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo 'About/page';
    }
}