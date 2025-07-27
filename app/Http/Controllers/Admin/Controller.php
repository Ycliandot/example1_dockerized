<?php

namespace App\Http\Controllers\Admin;

use App\Services\Employee\Service;
use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
