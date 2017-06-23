<?php
require __DIR__ . 'vendor/autoload.php';
use TelegramBot\Api as Api;

$bot = new Api;

$bot->command('start01', function ($message) use ($bot) {
    $answer = 'Start01';
    $bot->sendMessage($message->getChat()->getId(), $answer);
});
