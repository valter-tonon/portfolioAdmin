<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class AboutController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        return About::where('is_active', 1)->first();
    }

}
