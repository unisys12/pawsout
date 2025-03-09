<?php

declare(strict_types=1);

test('the registration route is working', function () {
    $this->get('/registration')->assertOk();
});
