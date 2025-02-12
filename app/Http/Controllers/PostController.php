<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function process_err_based(Request $request)
	{
		ini_set('display_errors', 1);

		$sql = $request->input('search_bar');

		$result = DB::select($sql);

		echo print_r($result, true);
	}
	public function blind_process(Request $request)
	{
		$first_sql = $request->input('first_name');
		$last_sql = $request->input('last_name');

		// Check if input boxes are empty
		if(!empty($request->input('first_name') && $request->input(last_name) )) {
			$first_result = DB::statement($first_sql);
			$last_result = DB::statement($last_sql);
		}
	}
}
