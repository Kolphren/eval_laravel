<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    public function designers() {
        return $this->hasMany(Character::class);
    }
    public static function getOne ($id) {
        return Designer::find($id);
    }
    public static function addOne ($request) {

        $designer = new Designer;
        $designer->name = $request->name;
        $designer->birth_year = $request->birth_year ;
        $designer->nationality = $request->nationality ;
        $designer->save();
        return;
    }    
    public static function modifyOne ($request) {
        $designer = Designer::find($request->id);
        $designer->name = $request->name ;
        $designer->birth_year = $request->birth_year ;
        $designer->nationality = $request->nationality;
        $designer->save();
        return;
    }
}
