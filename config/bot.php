<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Telegram Chat ID
    |--------------------------------------------------------------------------
    |
    | To get the ID, first, make conversation with bot. Make sure the webhook
    | is set to false, by using Telegram::removeWebhook() command.
    | Then you can get the chat ID by using Telegram::getUpdates() and see
    | the Telegram\Bot\Objects\User section. The ID can be user or group.
    |
    */

    'telegram_chat_id' => env('TELEGRAM_CHAT_ID', 'chat-id-to-send-notification'),

];
