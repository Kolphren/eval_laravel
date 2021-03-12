<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designer;

class DesignerController extends Controller
{
    public static function addOne (Request $request) {
        Designer::addOne($request);
        return redirect('/designers');
    }
    public static function modifyOne (Request $request) {
        Designer::modifyOne($request);
        return redirect('/designers');
    }
    public static function removeOne (Request $request) {
        $designer = Designer::find($request->id);
        $designer->delete();
        return redirect('/designers');
    }
}
