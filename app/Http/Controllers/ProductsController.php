<?php namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::all();
		return view('products.index', compact('products'));
		//return $products;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::lists('name', 'id');
		return view('products.create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductRequest $request)
	{
		//validation

		$params = $request->all();

		Product::create($params);

		return redirect('products');
	}

	// public function store(Request $request)
	// {
	// 	//validation
	// 	$V = $this->validate($request,
	// 		[
	// 			'name' => 'required|min:3',
	// 			'price' => 'required|numeric|min:0'
	// 		]
	// 	);
	//
	// 	if( !$V->fail() ){
	// 		Product::create($params);
	// 	}
	//
	// 	return redirect('products');
	// }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = Product::findOrFail($id);
		return view('products.show', compact('product'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::findOrFail($id);
		$categories = Category::lists('name', 'id');

		return view('products.edit', compact('product', 'categories'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProductRequest $request)
	{
		$product = Product::findOrFail($id);
		$product->update($request->all());
		return redirect('products');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
