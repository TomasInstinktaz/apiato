<?php

namespace App\Containers\Test\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Ship\Parents\Controllers\ApiController;

/**
 * Class Controller.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class Controller extends ApiController
{

    /**
     * @return  \Illuminate\Http\JsonResponse
     */
    public function apiRoot()
    {
        $message = Apiato::call('Test@FindMessageForApiRootVisitorAction');

        return response()->json($message);
    }

    /**
     * @return  \Illuminate\Http\JsonResponse
     */
    public function v1ApiLandingPage()
    {
        $message = Apiato::call('Test@FindMessageForApiV1VisitorAction');

        return response()->json($message);
    }

}
