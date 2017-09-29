<?php


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
				'prefix' => 'services'
			],
			function()
			{
				Route::get('create', 'Dashboard\ServicesController@index')->name('create');
				Route::post('', 'Dashboard\ServicesController@store')->name('store');
			}
		);
	}
);


