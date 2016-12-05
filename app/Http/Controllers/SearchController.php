<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SearchController extends Controller
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
        $tpl_name = 'pages.ins_search';
        return view($tpl_name);

    }

}