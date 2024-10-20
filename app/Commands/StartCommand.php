<?php

namespace App\Commands;

use Telegram\Bot\Commands\Command;

final class StartCommand extends Command
{
    protected string $name = 'start';
    protected string $pattern = '{username}';
    protected string $description = 'Нажмите здесь для начала работы';

    public function handle()
    {
        $fallbackUsername = $this->getUpdate()->getMessage()->from->first_name;

        # Get the username argument if the user provides,
        # (optional) fallback to username from Update object as the default.
        $username = $this->argument(
            'username',
            $fallbackUsername
        );

        $this->replyWithMessage([
            'text' => "Привет, {$username}!" . PHP_EOL . "Я бот-синоптик, который подскажет вам погоду в любом городе мира. Для получения погоды отправьте геолокацию (доступно с мобильных устройств).\nТакже возможно указать город в формате: <b>Город</b> или в формате <b>Город, код страны</b>. \nПримеры: <b>London</b>,\n<b>London, uk</b>,\n<b>Kiev, ua</b>, \n<b>Киев</b>",
            'parse_mode' => 'HTML',
        ]);
    }
}
