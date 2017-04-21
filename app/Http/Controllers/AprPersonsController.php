<?php namespace App\Http\Controllers;

use App\models\AprPersons;
use Illuminate\Routing\Controller;

class AprPersonsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /aprpersons
	 *
	 * @return Response
	 */
	public function index()
	{
		return AprPersons::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /aprpersons/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aprpersons
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /aprpersons/{id}
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
	 * GET /aprpersons/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /aprpersons/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /aprpersons/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}