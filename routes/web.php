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
		Route::get('', 'StaticPagesController@index')->name('home');
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
				// 'middleware' => 'glpi.auth'
			],

			function()
			{
				Route::get('success', 'Dashboard\ServicesController@success')->name('success');
				Route::get('view/{id}', 'Dashboard\ServicesController@show')->name('view');
				
				Route::get('create', 'Dashboard\ServicesController@create')->name('create');
				Route::post('store', 'Dashboard\ServicesController@store')->name('store');
				
				Route::post('edit', 'Dashboard\ServicesController@edit')->name('edit');
				Route::post('update', 'Dashboard\ServicesController@update')->name('update');
				
				Route::post('remove', 'Dashboard\ServicesController@remove')->name('remove');
			}

		);

		//Rotas para chamado
		Route::group(
			[
				'as' => 'calls.',
				'prefix' => 'calls'
			],

			function()
			{
				Route::post('create', 'Dashboard\CallsController@create')->name('create');
				Route::post('store', 'Dashboard\CallsController@store')->name('store');
			}
		);
	}
);


