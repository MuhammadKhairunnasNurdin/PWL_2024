<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        return 'NIM     : 2241720133'. '<br>'. 'Nama    : Muhammad Khairunnas Nurdin';
    }
}
