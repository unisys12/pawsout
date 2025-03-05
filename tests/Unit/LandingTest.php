<?php

declare(strict_types=1);

test('that the Landing page can be displayed', function () {
    $this->get('/')->assertOk();
});
