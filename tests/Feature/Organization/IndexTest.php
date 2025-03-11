<?php

declare(strict_types=1);

it('can load the organizations index view', function () {
    $this->get('/organization')->assertOk();
});
