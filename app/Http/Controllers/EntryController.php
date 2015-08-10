<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Requests\CreateEntryRequest;
use App\Http\Controllers\Controller;
use App\Entry;
use Request;

class EntryController extends Controller
{
    public function getIndex()
	{
		return view('inscriere');
	}

	public function postIndex(CreateEntryRequest $request)
	{
		$input = $request->all();

		Entry::create($input);
// dd($input);
		return response()->json([
                                  'status' => 'OK'
                                , 'message' => 'Formul nu a fost completat'
                                ]);
	}
}
