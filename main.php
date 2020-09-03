<?php
  class balok{
    var $panjang;
    var $lebar;
    var $tinggi; 
    
    }
    function volume():void{
    $vol=$this->panjang*$this->lebar*$this->tinggi;
    echo $vol;
      
    }
  }
  $kotak1 = new balok();
  echo"masukan panjang : ";
  $kotak1->panjang = trim(fgets(STDIN));
  echo "masukan tinggi : ";
  $kotak1->tinggi = trim(fgets(STDIN));
  echo "masukan lebar : ";
  $kotak1->lebar= trim(fgets(STDIN));
  $kotak1->volume();
  ?>
  //Ini menggunakan php cli, di debug dengan xdebug error akan tetapi menggunakan debuger online (-repl) itu berhasil dan tidak error
