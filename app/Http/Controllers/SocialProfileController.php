<?php

namespace App\Http\Controllers;

use App\Models\SocialProfile;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class SocialProfileController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        return SocialProfile::all()->sortBy('position');
    }
}
