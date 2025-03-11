<?php

declare(strict_types=1);

it('should be able to access the organization create route', function () {
    $this->get('/organization/create')->assertOk();
});
