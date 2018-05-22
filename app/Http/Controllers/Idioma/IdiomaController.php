<?php

namespace App\Http\Controllers\Idioma;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IdiomaController extends Controller
{
    public function idioma($lang = null)
    {
    	if(!$lang == null)
    	{
    		return redirect()->back()->withCookie("idioma",$lang,1440);
    	}
    	
    }
}
