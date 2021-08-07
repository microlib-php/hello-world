<?php


require './lib/src/loader.php';
require './app/startHandler.php';
require './app/callbackHandler.php';
$bot = new \lib\Api('1921743418:AAGpp9UWYGiZo5lqz3QB6y73vhMz1sudOKE');

$bot->onText('\/start', app\startHandler::class);
$bot->onCallback('data+', app\callbackHandler::class);


//onAny metodi olib tashlandi, videodan o'zingiz yozib olishingiz mumkin


$bot->webhook();