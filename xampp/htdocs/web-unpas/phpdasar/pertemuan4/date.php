<?php
//Date
// untuk menampilkan tgl untuk format tertentu
// echo date("l, d-M-Y");

//Time
//UNIX Timestamp / EPOCH Time
//detik yang sudah berlalu sejak 1 Jan 1970
// echo time();

// echo date("d M Y", time() - 60 * 60 * 24 * 100);

//Mk Time
//membuat sediri detik yang kita inginkan
//mktime(0,0,0,0,0,0) => jam, menit, detik, bulan, tanggal, tahun

// echo mktime(0, 0, 0, 13, 03, 1989);
// echo date("l", mktime(0, 0, 0, 13, 3, 1989));

//strtotime
// echo date("l", strtotime("10 March 1989"));

//String
// -  strlen(), strcmp(), explode(), htmlspecialchars()

//Utility
// - var_dump(), isset() --> akan menghasilkan sebuah boolean, empty(), die() -> u/ memberhentikan proram kita, sleep() -> u/ memberhentikan sementara contoh 2 detik
