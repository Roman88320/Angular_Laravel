<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function __construct()
    {

    }

    /**
     * Display Home Page content
     *
     * @return Response
     */
    public function display()
    {
        $tpl_name = 'pages.home';
        return view($tpl_name);

    }

}
