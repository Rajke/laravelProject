<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Item;
use App\User;
use Request;
use Input;

class TODOController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() 
	{
		return view('items.index',['items' => Auth::user()->items, 'user'=>Auth::user()]);
		//return Item::all();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('items.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
    {	
    	$inputs = Request::all();
    	$inputs['user_id'] = Auth::user()->id;
    	$item = Item::create($inputs);
        
        return redirect()->route('item.index');
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$item = Item::find($id);
		return view('item',['item'=>$item]);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$item = Item::find($id);
		return view('items.edit', ['item' => $item]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{	
		//dump(Request::all());
		$inputs = Request::all();
    	$inputs['user_id'] = Auth::user()->id;
    	Item::find($id)-> update($inputs);
        
        return redirect()->route('item.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$item = Item::find($id);

		$item->delete();

		return redirect()->route('item.index');
	}

	function ajaxItems()
	{
		return view('ajax-items');
	}

	function json()
	{
		return Item::all();
	}

	function ajaxPost()
	{
		$inputs = Input::all();

		if(Request::ajax()){
    	$inputs['user_id'] = Auth::user()->id;
    	$item = Item::create($inputs);
        }

        return $item;
        
	}


	function ajaxDelete($id){	
		
		$item = Item::findOrFail($id);

		if(Request::ajax())
		{
			$item->delete();
		}
		
		return $item;
	}


	function ajaxUpdate($id){

		
		$inputs = Input::all();

		if(Request::ajax()){
			$item = Item::find($id);
			$item->update($inputs);
		}
		return $item;
	}

	function galerija()
	{
		return view('mpopup');
	}

	function angular()
	{
		return view('angular');
	}

	function ajaxAngular(){
		return view('ajaxAngular');
	}

	function ajaxAngularDelete($id)
	{
		$item = Item::findOrFail($id);

		
			$item->delete();
		
		
		return $item;
	}

	function ajaxAngularPost()
	{
		$inputs = Input::all();

    	$inputs['user_id'] = Auth::user()->id;
    	$item = Item::create($inputs);

        return $item;
        
	}

	function ajaxAngularPut($id){

		$inputs = Input::all();

			$item = Item::find($id);
			$item->update($inputs);
		return $item;
	}
}
