<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function designer() {
        return $this->belongsTo(Designer::class);
    }
    public static function getOne ($id) {
        return Character::find($id);
    }
    public static function addOne ($request) {

        $character = new Character;
        $character->designer_id = $request->designer;
        $character->name = $request->name ;
        $character->creation_year = $request->creation_year ;
        $character->book_name = $request->book_name ;
        $character->save();
        return;
    }
    public static function modifyOne ($request) {
        $character = Character::find($request->id);
        $character->name = $request->name ;
        $character->creation_year = $request->creation_year ;
        $character->book_name = $request->book_name;
        $character->designer_id = $request->designer;
        $character->save();
        return;
    }
}
