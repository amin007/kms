<?php
/* Ini fail index.php
 * Dalam ini kita isytiharkan
 * 1. laporan tahap kesilapan kod PHP
 * 2. zon masa kita pada Asia/Kuala Lumpur
 * 3. masukkann fail fungsi_utama.php
 * 4. istihar class 
 */
 
# 1. laporan tahap kesilapan kod PHP
error_reporting(E_ALL);
 
# 2. isytiharkan zon masa => Asia/Kuala Lumpur
date_default_timezone_set('Asia/Kuala_Lumpur');
 
# 3. masukkann fail fungsi_utama.php
include 'fungsi_utama.php';
include 'tatarajah.php';

/* 4. istihar class 
** Selepas mendaftar fungsi autoload ini dengan SPL, baris berikut
** akan menyebabkan fungsi untuk cuba untuk memuatkan kelas \Foo\Bar\Baz\Qux
** dari /path/to/project/src/Baz/Qux.php:
**
**      new \Foo\Bar\Baz\Qux;
**/

$aplikasi = new \Aplikasi\Kitab\Peta();