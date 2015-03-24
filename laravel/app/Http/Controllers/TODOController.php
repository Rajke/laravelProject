<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Item;
use App\User;
use Request;

class TODOController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() 
	{
		return view('items.index', [ 'items' => Auth::user()->items]);
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
		//
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


}
