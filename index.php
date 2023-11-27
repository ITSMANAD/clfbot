<?php
include 'Telegram.php';

$telegram = new Telegram('6463000943:AAHvswPJRHUhwkB2dnoLapokgc5LucCamnQ');

$chat_id = $telegram->ChatID();
$content = array('chat_id' => $chat_id, 'text' => 'Test');
$telegram->sendMessage($content);