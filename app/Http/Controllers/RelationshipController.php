<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class RelationshipController extends Controller
{
    //
    public function one_to_one()
    {   
        return Member::find(2)->compnyData;
    }

    public function one_to_many()
    {
        return Member::find(1)->getdevice;
    }
}
