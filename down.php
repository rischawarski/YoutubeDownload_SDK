<?php
require __DIR__.'/vendor/autoload.php';

use Youtube\Service;

$url = $_GET['link'];

$youtube = new Service();

$download = $youtube->download($url);










