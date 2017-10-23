<?php

//Rotas para o Glpi
Route::group(
	
	[
		'as' => 'glpi.', 
		'prefix' => 'glpi'
	],

	function () 
	{
		Route::get('', 'Glpi\Requests@index')->name('index');
		Route::get('logout', 'Glpi\Requests@logout')->name('logout');
		Route::post('login', 'Glpi\Requests@login')->name('login');
	}
);

//Rotas para páginas státicas
Route::group(
	
	[
		'as' => 'static.',
	],

	function () 
	{
		Route::get('', 'StaticPagesController@index')->name('home')->middleware('glpi.redirect');
	}
);

//Rotas para o Dashboard
Route::group(
	
	[
		'as' => 'dashboard.', 
		'prefix' => 'dashboard'
	],

	function () 
	{
		
		//Rotas para Serviços
		Route::group(

			[
				'as' => 'services.',
				'prefix' => 'services',
				'middleware' => 'glpi.auth'
			],

			function()
			{
				Route::get('success', 'Dashboard\ServicesController@success')->name('success');

				Route::get('create', 'Dashboard\ServicesController@index')->name('create');
				Route::post('', 'Dashboard\ServicesController@store')->name('store');
			}

		);
	}
);


