<?php
namespace App\Controller;

use App\Controller\Views;
/**
 * 
 */
class HomeController extends Views
{

	public function index()
    {
            echo $this->render('base/index.html',['name'=>'Главная']);

    }
	public function about()
	{
        echo $this->render('base/about.html',['name'=>'О нас']);
	}
}