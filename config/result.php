<?php
// KONTROL UNTUK MENDAPATKAN ZONA WAKTU (Makassar)
date_default_timezone_set('Asia/Makassar');

// FUNCTION GET IP REAL
class RndyTech
{
    public function lokasi($ip){
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, 'https://randiramli.my.id/api/location/?ip='.$ip.'&RandKey=RndyXD'); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $exe = curl_exec($ch); 
        curl_close($ch);      

        return json_decode($exe,true);
    }
    public function device($ua){
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, 'https://randiramli.my.id/api/useragents/?ua='.urlencode($ua).'&RandKey=RndyXD'); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $exe = curl_exec($ch); 
        curl_close($ch);      

        return json_decode($exe,true);
    }
    public function flagcall($ip){
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, 'https://randiramli.my.id/api/flagcall/?ip='.$ip.'&RandKey=RndyXD'); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
        $exe = curl_exec($ch); 
        curl_close($ch);      

        return json_decode($exe,true);
    }
}
?>