<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class alunos extends Controller
{
    route::get('/teste','api/alunos@status');
} 
