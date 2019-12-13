<?php
require "./Imgcompress.php";
$file = './test.jpg';
$percent = 0.5;
$image = (new Imgcompress($file, $percent))->compressImg("./small_test.jpg");