<?php

declare(strict_types=1);

if (!function_exists('debug')) {
    function debug(mixed $data, bool $log = true)
    : void
    {
        if ($log) {
            file_put_contents(__DIR__ . '/../logs/logs.txt', print_r($data, true), FILE_APPEND);
        } else {
            echo '<pre>' . print_r($data, true) . '</pre>';
        }
    }
}

if (!function_exists('send_request')) {
    function send_request(string $url)
    : stdClass
    {
        return json_decode(
            file_get_contents(
                $url,
                false,
                stream_context_create([
                    'http' => [
                        'ignore_errors' => true,
                    ],
                ]),
            ),
        );
    }
}
