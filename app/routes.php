<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$soluciones = Solucion::has('ayudas', '>=', 1)
							->take(12)
							->get();
	$soluciones->sortBy('solucion');
	//$soluciones = Solucion::take(10)->get();
	//$soluciones = Solucion::where('cantidad','=',3)->get();
	return View::make('home.index', array('soluciones' => $soluciones, 'type' => 'index'));
});

Route::get('/all', function()
{
	$soluciones = Solucion::all();	
	return View::make('home.index', array('soluciones' => $soluciones, 'type' => 'all'));
});

Route::get('/letras/{cantidad}', function($cantidad)
{
	//$soluciones = Solucion::all();
	//$soluciones = Solucion::take(10)->get();
	$soluciones = Solucion::where('cantidad','=',$cantidad)->get();
	return View::make('home.index', array('soluciones' => $soluciones, 'type' => 'letras'));
});


Route::get('/ayudas', function()
{
	echo Ayuda::all()->toJson();
});
Route::get('/ayudas/reset', function()
{
	$ayudas = Ayuda::all();

	foreach ($ayudas as $key => $value) {
		$value->destroy($value->id);
	}
});

Route::post('/help-me/{id}', function($id)
{
	$ayuda = new Ayuda;
	$ayuda->ip = Request::getClientIp();
	$ayuda->solucion_id = $id;
	$ayuda->save();

	echo $ayuda->toJson();
});


Route::get('/uploads', function()
{
	if ($gestor = opendir('public/ready')) {

		while (false !== ($filename = readdir($gestor))) {
			if(pathinfo ($filename, PATHINFO_EXTENSION) == 'png'){
				$name = strtoupper(pathinfo ($filename, PATHINFO_FILENAME));

				if(Solucion::where('solucion', '=', $name)->count() == 0 ){
					$to = '/images/solutions/'.$filename;

					if(copy('public/ready/' . $filename, 'public/'.$to)){

						$img = Image::make('public/' . $to);
						$img->resize(200, 200);
						$img->save('public/images/solutions/thumbs/'.$filename, 50);

						$solucion = new Solucion;
						$solucion->solucion = $name;
						$solucion->cantidad = strlen($name);
						$solucion->imagen = $to;
						$solucion->save();
						echo $solucion->solucion . " >> " .$solucion->id."<br>";
					}
				}

			}
			
		}
	}
});

Route::get('/counts', function()
{

	$soluciones = Solucion::all();

	$counts = [];
	foreach ($soluciones as $key => $solucion) {
		if(!in_array($solucion->cantidad, $counts)){
			array_push($counts, $solucion->cantidad);
		}
	}
	
	dd($counts);

});

Route::get('/count/{count}', function($count)
{
	
	$soluciones = Solucion::where('cantidad','=',$count)->get();

	foreach ($soluciones as $key => $solucion) {
		$solucion->ayudas;
		$solucion->thumb = $solucion->getThumb();
	}
	echo $soluciones->toJson();
});