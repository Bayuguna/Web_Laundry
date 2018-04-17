<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function admin(){
        $member = Member::all();

        return view('admin.member', compact('member'));
    }

    public function manager(){
        $member = Member::all();

        return view('manager.dataMember', compact('member'));
    }
}
