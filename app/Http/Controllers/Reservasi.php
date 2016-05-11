<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\APIController as API;
use Illuminate\Http\Request;
use Input;

class Reservasi extends Controller {

	public function flight()
	{
		$s['airport']	=	\App\Airport::all();
		return view('reservasi.flight')->with($s);
	}

	public function searchFlight()
	{
		$data = [];
		$data['d'] = Input::get('from');
		$data['a'] = Input::get('to');
		$data['date'] = date_format(date_create(Input::get('depart_date')), "Y-m-d");
		if (Input::get('type') == "RT") {
			$data['ret_date'] = date_format(date_create(Input::get('return_date')), "Y-m-d");
		}
		$data['adult']	= Input::get('adult');
		$data['child']	= Input::get('child');
		$data['infant']	= Input::get('infant');
		$data['v']	= 1;

		\Session::put('token', '');

		$newapi = new API;


		$log = new \App\LogTrx;
		$log->request = json_encode($data);
		$log->token = session('token');
		$log->save();

		$sd = new \App\SearchData;
		$sd->depart_city = Input::get('from');
		$sd->arrive_city = Input::get('to');
		$sd->depart_date = $data['date'];
		if (Input::get('type') == "RT") {
			$sd->return_date = $data['ret_date'];
		}
		$sd->adult = Input::get('adult');
		$sd->child = Input::get('child');
		$sd->infant = Input::get('infant');
		$sd->ver = $data['v'];
		$sd->token = session('token');
		$sd->save();

		$hasil = $newapi->getCurl('search/flight', $data);
		echo "<pre>".print_r($hasil,1)."</pre>";

		$sd->result = json_encode($hasil);
		$sd->save();

		$log->response = json_encode($hasil);
		$log->status_code = $hasil->diagnostic->status;
		$log->save();

	}

}
