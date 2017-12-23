<?php

namespace App\Traits\Helpers;

use Telegram;

trait TelegramSender
{
    public function sendTelegramText($text = null, $parse_mode = 'markdown')
    {
        if (empty($text)) {
            return;
        }

        $chat_id = $this->getChatId();

        return Telegram::sendMessage(compact('chat_id', 'text', 'parse_mode'));
    }

    protected function getChatId()
    {
        return config('bot.telegram_chat_id');
    }
}
