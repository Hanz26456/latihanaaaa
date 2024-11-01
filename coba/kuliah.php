<?php 

class mhs{
    var $nama;

    function set_nama($new_nama){
        $this -> nama = $new_nama;
    }

    function get_nama(){
        return $this-> nama;
    }
}

$gani = new mhs;
$gani->set_nama("Gani Prasetyo");

echo "gani nama lengkap : ".$gani->get_nama();

?>