<?php

declare(strict_types=1);

test('the login route is working', function () {
    $this->get('/login')->assertOk();
});
