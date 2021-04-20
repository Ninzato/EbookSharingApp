<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function about (){
        return view('subview.about');
    }

    public function list (){
        $list = array(
            array('Lord of the kong', '1245', 'Fantasy', '999'),
            array('The legend of kong', '1111', 'Fantasy', '2500')
        );

        return view('subview.list', compact('list'));
    }
}
