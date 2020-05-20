<?php
session_start();
require 'config.php';

//Chamando o arquivo de autoload 
require 'autoload.php';

$core = new Core();
$core->run();