<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class UserInfoController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        return UserInfo::all()->first();
    }
}
