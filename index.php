<?php

declare(strict_types=1);

error_reporting(-1);
ini_set('display_errors', 0);
ini_set('log_errors', 'on');
ini_set('error_log', __DIR__ . '/logs/errors.log');

use Telegram\Bot\Api;
use Telegram\Bot\Exceptions\TelegramSDKException;

require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/helpers/constants.php';

$telegram = new Api(TOKEN);
$response = $telegram->getMe();
debug($response, false);
/*try {
    $telegram->addCommands([
        App\Commands\HelpCommand::class,
        App\Commands\StartCommand::class,
    ]);
} catch (TelegramSDKException $e) {
    debug($e->getMessage());
}

//$update = $telegram->commandsHandler(true);
$update = $telegram->commandsHandler(false, ['timeout' => 30]);
debug($update);

$chat_id = $update->getChat()->get('id') ?? 0;

if (!$chat_id) {
    die();
}

$message = $update->getMessage();
debug($message);

if ($message) {
    $text = $message->text ?? '';
    $name = $message->from->first_name ?? 'Guest';

    if ($message->entities == null && !empty($text)) {
        $telegram->sendMessage([
            'chat_id' => $chat_id,
            'text' => 'Запрашиваю данные...',
        ]);
    }
}*/
