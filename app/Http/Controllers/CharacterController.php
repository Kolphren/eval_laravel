<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class CharacterController extends Controller
{
    public static function addOne (Request $request) {
        Character::addOne($request);
        return redirect('/characters');
    }
    public static function modifyOne (Request $request) {
        Character::modifyOne($request);
        return redirect('/characters');
    }
    public static function removeOne (Request $request) {
        $character = Character::find($request->id);
        $character->delete();
        return redirect('/characters');
    }
}
