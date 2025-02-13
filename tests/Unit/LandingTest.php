<?php

declare(strict_types=1);

test('that the landing page can be displayed', function () {
    $this->get('/')->assertOk();
});
