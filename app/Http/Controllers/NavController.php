<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Designer;


class NavController extends Controller
{
    public function home() {
        return view('home');
    }
    public function characters() {
        $characters = Character::all();
        return view('characters', ['characters' => $characters]);
    }
    public function designers() {
        $designers = Designer::all();
        return view('designers', ['designers' => $designers]);
    }
    public function bike($id) {
        $characters = Character::getOne($id);
        return view('bike', ['characters' => $characters]);
    }
    public static function add_character() {
        $designers = Designer::all()
        ->sortBy('name');
        return view('add_character', ['designers' => $designers]);
    }
    public static function add_designer() {
        $characters = Character::all()
        ->sortBy('name');
        return view('add_designer', ['characters' => $characters]);
    }
    public function modify_character($id) {
        $character = Character::getOne($id);
        $designer = Designer::all()
        ->sortBy('name');
        return view('modify_character', ['character' => $character, 'designer' => $designer]);
    }
    public function modify_designer($id) {
        $designer = Designer::getOne($id);
        return view('modify_designer', ['designer' => $designer]);
    }
}