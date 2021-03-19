<?php

use Psr\Http\Message\ServerRequestInterface;

$_SERVER['APP_RUNTIME'] = \Runtime\PsrNyholmLaminas\Runtime::class;

require __DIR__.'/autoload.php';

return function (ServerRequestInterface $request) {
    return new \Nyholm\Psr7\Response(200, [], 'Hello PSR-7');
};
