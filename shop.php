<?php


$korisnicko_ime = strtolower($_POST["korisnicko_ime"]);
   
if($korisnicko_ime =="admin"){
    echo "dobrodosao admine";
}else{
    echo "niste admin";
}



/// sldeci domaci log in forma 


