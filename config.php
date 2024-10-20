<?php

declare(strict_types=1);

// setting webhook url
// weather-tg-bot
// https://api.telegram.org/bot2043775704:AAHsJMXvDsqCAPj-dfOl6mxfObcghGQPWAU/setWebhook?url=https://asia-travels.ru/weather-tg-bot/
// https://api.telegram.org/bot2043775704:AAHsJMXvDsqCAPj-dfOl6mxfObcghGQPWAU/getWebhookInfo?url=https://asia-travels.ru/weather-tg-bot/

const TOKEN = '2043775704:AAHsJMXvDsqCAPj-dfOl6mxfObcghGQPWAU';
const OPEN_WEATHER_API_KEY = '595bcd47150b44c6f35370cf46d45220';
const OPEN_WEATHER_BASE_URL = 'https://api.openweathermap.org/data/2.5/weather?';

$weather_url = OPEN_WEATHER_BASE_URL . http_build_query([
    'lang' => 'ru',
    'units' => 'metric',
    'appid' => OPEN_WEATHER_API_KEY
]);
