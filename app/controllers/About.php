<?php

class About {
    public function index($nama = 'Sandhika', $pekerjaan = "Dosen") {
        echo "Hallo, nama saya $nama, saya seorang $pekerjaan";
    }

    public function page() {
        echo 'About/page';
    }
}