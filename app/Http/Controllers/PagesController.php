<?php namespace App\Http\Controllers;

class PagesController extends Controller {
	public function about(){
		$name = "Andrey Salas";
		$tel = "300785321";
		return view('pages.about', compact('name', 'tel'));
	}


}
