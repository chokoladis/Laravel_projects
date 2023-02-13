<?php

namespace App\Http\Controllers;

use App\Http\Services\TodolistService;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public $service;

    public function __construct(TodolistService $service){

        $this->service = $service;

    }
}
