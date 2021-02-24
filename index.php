<?php declare(strict_types=1);

namespace App;

use Siler\{Route, Http\Response};

require_once __DIR__ . '/vendor/autoload.php';

Route\get('/test', static function (): void {
    Response\text('Hello, World!');
});
