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
	return View::make('hello');
});


 

Route::get('admin/{id}', function($id)
{
    return 'admin!'.$id;
});



// Route::get('user/{id}', function($id)
// {
//     return 'user!'.$id;
// });


Route::post('user/profile', function()
{
    return 'This is my profile !';
});


Route::match(array('GET','POST'),'user', function()
{
    return 'Matching the item !';
});


Route::any('fun',function()
{
    return 'any function !';
});



Route::get('overhttps',array('https',function()
{
    return 'route over http  !';
}));


// Regular expression route

Route::get('regular/{name}',function($name){

	return "value is letters" ;
}) ->where('name','[A-Za-z]+');


Route::get('regular/{num}',function($num){

	return "value is numbers" ;
}) ->where('num','[0-9]+');

Route::get('regular/{letnum}',function($letnum){

	return "value is combination of letters numbers letters" ;
}) ->where('letnum','[0-9a-zA-z]+');


//passing array o where clauses 

Route::get('regular/{id}/{anme}',function($letnum){

	return "array of id and num" ;
}) ->where(array('id'=>'[0-9]+','name'=>'[a,z]+'));


// if you want route parameter to be constrianed 

Route::pattern('id','[0-9]+');
Route::get('auth/{id}',function($id){

	 return 'authenticated numbers' ;
})  ;



// generating your own url


$url = URL::to('gen');


 
Route::get($url,function(){
	return "heloo this url is generated url";
});

 


