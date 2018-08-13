<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsFormRequest;
use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function store(NewsFormRequest $request)
	{

    if ( ! Newsletter::isSubscribed($request->email) ) 
    	{
        	Newsletter::subscribe($request->email);
        	Newsletter::subscribePending($request->email);
        	flashy('Nous vous avons envoyé un Email de confirmation');
        	return redirect('/');
    	}
    	flashy()->warning('Vous êtes déjà inscris à la Newsletter');
    	return redirect('/');
	}

}
