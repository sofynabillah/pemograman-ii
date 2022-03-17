<?php

class handphone  {
    public  $nama,
            $merk,
            $warna,
            $ram,
            $kamera;

    public function nyalakanhandphone() {

    }

    public function matikanhandphone() {

    }
    
    public function pejernihgambar() {

    }

    public function peneranggambar() {

    }

    public function aksespenyimpanan() {

    }

    public function perbesarlayar() {

    }

}

class handphoneandroid extends handphone {
    public $proyeksilayar = false;
    public $otg = false;

    public function nyalakanproyeksilayar(){
        $this->proyeksilayar = true;
        return "proyeksi layar dinyalkan, layar diperbesar!";
    }

    public function masukkanotg(){
        $this->otg = true;
        return "otg dimasukkan, penyimpanan bisa diakses!";
    }
}

class handphoneios extends handphone {
    public $hdr = false;
    public $modemalam = false;

    public function hdrhidup(){
        $this->hdr = true;
        return "hdr dihidupkan, gambar jernih!";
    }

    public function nyalakanmodemalam(){
        $this->modemalam = true;
        return "mode malam dinyalakan, gambar terang!";
    }
}

$handphone1 = new handphoneandroid();
echo $handphone1->perbesarlayar();
echo "<br>";
echo $handphone1->nyalakanproyeksilayar();
echo "<br>";
echo $handphone1->aksespenyimpanan();
echo "<br>";
echo $handphone1->masukkanotg();
echo "<br>";
$handphone2 = new handphoneios();
echo $handphone2->pejernihgambar();
echo "<br>";
echo $handphone2->hdrhidup();
echo "<br>";
echo $handphone2->peneranggambar();
echo "<br>";
echo $handphone 2->nyalakanmodemalam();
?>


<?php

class sepeda  {
    public  $nama,
            $merk,
            $warna;

    public function modelistrik() {

    }

    public function belokkanan() {

    }
    
    public function modecepat () {

    }

    public function modelambat() {

    }

    public function belokkiri() {

    }


}

class sepedalistrik extends sepeda {
    public $modelistrik = false;
    public $kecepatan = false;

    public function nyalakanmodesepedalistrik(){
        $this->modelistrik = true;
        return "sepeda listrik dijalankan, sepeda bisa dikontrol secara otomatis!";
    }

    public function jalankanmodecepat(){
        $this->kecepatan = true;
        return "sepeda dijalankan, sepeda akan melaju cepat!";
    }
}

class sepedagunung extends sepeda {
    public $gearkecil = false;
    public $gearbesar = false;

    public function naikkankangearkecil(){
        $this->gear = true;
        return "gear dinaikkan, sepeda akan laju dengan pedal lambat!";
    }

    public function turunkangearbesar (){
        $this->gearbesar = true;
        return "gear diturunkan, sepeda akan laju dengan pedal cepat!";
    }
}

$sepeda1 = new handphoneandroid();
echo $sepeda1->perbesarlayar();
echo "<br>";
echo $sepeda1->nyalakanproyeksilayar();
echo "<br>";
echo $sepeda1->aksespenyimpanan();
echo "<br>";
echo $sepeda1->masukkanotg();
echo "<br>";
$sepeda2 = new handphoneios();
echo $sepeda2->pejernihgambar();
echo "<br>";
echo $sepeda2->hdrhidup();
echo "<br>";
echo $sepeda2->peneranggambar();
echo "<br>";
echo $sepeda 2->nyalakanmodemalam();
?>

