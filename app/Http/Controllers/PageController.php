<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function product(){
        $productName=array("Tab","Mobile","Laptop");
        return view('pages.product')
        ->with('productName',$productName)


        
        ;
    }
   public function contact(){
       return view('contact');
   }
   public function team(){
       return view('pages.team');
   }
 
   public function profile(){
       
       $vill= "barera";
       $names=array("karim","rahim","jodu");
       return view('profile')
       ->with('vill',$vill)
       ->with('names',$names);
   }
}
