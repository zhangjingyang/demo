<?php
include 'vendor/autoload.php';

use App\Captcha;

// new Captcha();

// sum(1, 2);

use Gregwar\Captcha\CaptchaBuilder;

$builder = new CaptchaBuilder;
$builder->build();
header('Content-type: image/jpeg');
$builder->output();
