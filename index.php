<?php

use Phpunit\Box;
use Phpunit\User;

require 'vendor/autoload.php';
require 'functions.php';


echo addNumbers(5,5);
echo "\n";

$box = new Box(['Qalam', 'Ruchka', 'Qaychi']);
$box->takeOne();
print_r($box->startsWith('Q'));

echo "\n";
$salim = new User(18, 'Salim');
echo $salim->tellName();
