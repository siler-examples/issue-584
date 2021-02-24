<?php declare(strict_types=1);

namespace App;

use Siler\Route;
use function Siler\Functional\puts;

require_once __DIR__ . '/vendor/autoload.php';

Route\get('/test', puts('Hello, World!'));
