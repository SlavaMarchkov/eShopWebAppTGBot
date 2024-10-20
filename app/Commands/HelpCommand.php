<?php

namespace App\Commands;

use Telegram\Bot\Commands\Command;

final class HelpCommand extends Command
{
    protected string $name = 'help';
    protected string $description = 'Помощь по работе с ботом';

    public function handle()
    {
        $this->replyWithMessage([
            'text' => "Я бот-синоптик, который подскажет вам погоду в любом городе мира. Для получения погоды отправьте геолокацию (доступно с мобильных устройств).\nТакже возможно указать город в формате: <b>Город</b> или в формате <b>Город, код страны</b>. \nПримеры: <b>London</b>,\n<b>London, uk</b>,\n<b>Kiev, ua</b>, \n<b>Киев</b>",
            'parse_mode' => 'HTML',
        ]);
    }
}
