<?php
include("Telegram.php");
date_default_timezone_set("asia/tehran");
// Set the bot TOKEN
$bot_id = "6463000943:AAHvswPJRHUhwkB2dnoLapokgc5LucCamnQ";
// Instances the class
$telegram = new Telegram($bot_id);
$text = $telegram->Text(); // متنی که کاربر ارسال میکنه
$username = $telegram->Username(); // نام کاربری کاربر
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID(); // هر پیغام در تلگرام یک آیدی یکتا دارد
$user_id = $telegram->UserID(); // آیدی یکتای کاربر
$chat_id = $telegram->ChatID(); // آیدی مکانی که چت صورت میگیرد، مثل خود بات یا آیدی گروه


if($text == "/start"){
    $content = array('chat_id' => $chat_id, 'text' => "سلام خره");
    $telegram->sendMessage($content);
}
