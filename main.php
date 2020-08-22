<?php
  class balok{
    var $panjang;
    var $lebar;
    var $tinggi;
    function setNilai($pan,$leb,$ting){
      $this->panjang=$pan;
      $this->lebar=$leb;
      $this->tinggi=$ting;
    }
    function volume():void{
    $vol=$this->panjang*$this->lebar*$this->tinggi;
    echo $vol;
      
    }
  }
  $kotak1 = new balok();
  $p;
  $l;
  $t;
  echo"masukan panjang : ";
  $p = trim(fgets(STDIN));
  echo "masukan tinggi : ";
  $t = trim(fgets(STDIN));
  echo "masukan lebar : ";
  $l = trim(fgets(STDIN));
  $kotak1->setNilai($p,$l,$t);
  $kotak1->volume();
  ?>
  