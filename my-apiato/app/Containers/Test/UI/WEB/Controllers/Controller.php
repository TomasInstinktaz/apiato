<?php

namespace App\Containers\Test\UI\WEB\Controllers;

use App\Ship\Parents\Controllers\WebController;

class Controller extends WebController
{

    /**
     * @return  string
     */
    public function sayWelcome()
    {
        return view('test::welcome-page');
    }
}
