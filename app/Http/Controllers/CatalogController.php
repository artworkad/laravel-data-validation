<?php

namespace App\Http\Controllers;

use App\Data\CatalogSearchRequest;

class CatalogController extends Controller
{
    public function __invoke(CatalogSearchRequest $request)
    {
        return [];
    }
}
