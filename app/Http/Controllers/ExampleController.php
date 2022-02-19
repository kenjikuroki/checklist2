<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;

class ExampleController extends Controller
{
    public function index(RegisterUserRequest $request) {}
}
