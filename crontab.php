<?php

require_once __DIR__ . '/common.php';

$text = sprintf('Crontab execution date %s', date('Y-m-d H:i:s')) . "\n";

file_put_contents(__DIR__ . '/var/crontab.txt', $text, FILE_APPEND);

echo $text;