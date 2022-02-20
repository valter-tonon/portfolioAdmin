<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class SkillController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        return Skill::all()->sortBy('position');
    }
}
