<?php

Namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController{

	public function home(){

		return new Response("Hello I am a new page bloke");
	}
}