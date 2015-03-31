<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use DB;

class HomeController extends Controller {




	
	public function index()
	{
		$product=DB::table('products')->get();
		return view('home',compact('product'));
	}
	public function about()
	{
		$product=DB::table('products')->get();
		$abouts=DB::table('aboutus')->get();
		return view('about',compact('abouts','product'));
	}
	public function faq()
	{
		$product=DB::table('products')->get();
		return view('faq',compact('product'));
	}
	public function convert()
	{
		$product=DB::table('products')->get();
		return view('convert',compact('product'));
	}
	public function bangladesh()
	{
		$product=DB::table('products')->get();
		return view('bangladesh',compact('product'));
	}
	public function payment()
	{
		$product=DB::table('products')->get();
		return view('payment',compact('product'));
	}
	public function contact()
	{
		$product=DB::table('products')->get();
		return view('contact',compact('product'));
	}
	public function show($id)
	{
		$product=DB::table('products')->get();
		$aboutgoods = DB::table('about_product')->where('name', '=',"Jute")->get();
		return view('products',compact('product','id','aboutgoods'));
	}
	
}
