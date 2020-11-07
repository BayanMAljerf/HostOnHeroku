<?php
 use App\Csvdata;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function () {


  //routes for posts 
  Route::get('/post/create', 'PostsController@create')->name('post.create');
  Route::post('/post/store', 'PostsController@store')->name('post.store');
  Route::get('/posts', 'PostsController@index')->name('posts');
  Route::get('/post/delete/{id}', 'postsController@destroy')->name('post.delete');
  Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');
  Route::get('/post/restore/{id}', 'postsController@restore')->name('post.restore');
  Route::get('/post/hdelete/{id}', 'postsController@hdelete')->name('post.hdelete');
  Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
  Route::post('/post/update/{id}' ,  'PostsController@update')->name('post.update');



  //routes for categories
  Route::get('/category/create', 'CategoriesController@create')->name('category.create');
  Route::post('/category/store', 'CategoriesController@store')->name('category.store');
  Route::get('/categories', 'CategoriesController@index')->name('categories');
  Route::get('/category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
  Route::get('/category/delete/{id}', 'CategoriesController@destroy')->name('category.delete');
  Route::post('/category/update/{id}' ,  'CategoriesController@update')->name('category.update');

  //routes for tags
  Route::get('/tag/create', 'TagsController@create')->name('tag.create');
  Route::post('/tag/store', 'TagsController@store')->name('tag.store');
  Route::get('/tags', 'TagsController@index')->name('tags');
  Route::get('/tag/edit/{id}', 'TagsController@edit')->name('tag.edit');
  Route::get('/tag/delete/{id}', 'TagsController@destroy')->name('tag.delete');
  Route::post('/tag/update/{id}' ,  'TagsController@update')->name('tag.update');


//routes for users
Route::get('/user/makeadmin/{id}', 'UsersController@makeAdmin')->name('user.makeadmin');
Route::get('/user/deleteadmin/{id}', 'UsersController@deleteAdmin')->name('user.deleteadmin');
Route::get('/users', 'UsersController@index')->name('users');
Route::get('/user/create', 'UsersController@create')->name('user.create');
Route::post('/user/store', 'UsersController@store')->name('user.store');
Route::get('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');


//rotes for user profile 

Route::get('/users/profile', 'ProfilesController@index')->name('users.profile');
Route::post('/users/profile/update', 'ProfilesController@update')->name('users.profile.update');
Route::get('/users/profile/create', 'ProfilesController@create')->name('users.profile.create'); 


//rotes for settings 
Route::get('/settings', 'SettingsController@index')->name('settings');
Route::post('/settings/update', 'SettingsController@update')->name('setting.update');


//rotes for admin dashboard 
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

//rotes for user front end 
Route::get('/', 'websiteUIController@index')->name('index');
//Route::get('/category/{id}', 'websiteUIController@category')->name('category.show');
//Route::get('/tag/{id}', 'websiteUIController@tag')->name('tag.show');
Route::get('/contact', 'websiteUIController@contact')->name('contact');
Route::get('/blog/{id}', 'websiteUIController@blog')->name('blog');
Route::get('/singlepost/{slug}', 'websiteUIController@singlepost')->name('singlepost');
//Route::get('/destination', 'websiteUIController@destination')->name('destination');




//rotes for user front end 
Route::get('/', 'websiteUIController@index')->name('index');
//Route::get('/category/{id}', 'websiteUIController@category')->name('category.show');
//Route::get('/tag/{id}', 'websiteUIController@tag')->name('tag.show');
Route::get('/contact', 'websiteUIController@contact')->name('contact');
Route::get('/blog/{id}', 'websiteUIController@blog')->name('blog');
Route::get('/singlepost/{slug}', 'websiteUIController@singlepost')->name('singlepost');
//Route::get('/destination', 'websiteUIController@destination')->name('destination');
Route::get('/map', 'websiteUIController@map')->name('map');
Route::get('/mymap', 'websiteUIController@mymap')->name('mymap');
Route::get('/mymap1', 'websiteUIController@mymap1')->name('mymap1');
Route::get('/mymap2', 'websiteUIController@mymap2')->name('mymap2');
Route::get('/mymap3', 'websiteUIController@mymap3')->name('mymap3');

Route::get('/index1', 'websiteUIController@index1')->name('index1');
Route::get('/index2', 'websiteUIController@index2')->name('index2');
Route::get('/index3', 'websiteUIController@index3')->name('index3');

// Route::post('/map1', 'MapController@map1')->name('map1');
// Route::get('/map11', 'MapController@map11')->name('map11');
// Route::post('/map2', 'MapController@map2')->name('map2');




// //route for query results
// Route::get('/bayan/results', function () {
//   $post=Post::where('title','like','%'.request('search').'%')->get();
//     return view('results.results')
//     ->with('posts',$post)
//     ->with('blog_name',Setting::first()->blog_name)
//     ->with('blog_email',Setting::first()->blog_email)
//     ->with('address',Setting::first()->address)
//     ->with('tags',App\Tag::all())
//     ->with('phone',Setting::first()->phone_number)
//     ->with('categories',Category::orderBy('created_at','DESC')->take(4)->get())
//     ->with('query',request('search'))
//     ->with('title','Query Results : '.request('search'));
//    })->name('results');

});
//route for query results
Route::get('/bayan/results', function () {
  $post      = App\Post::where('title', 'like', '%'.request('search') .'%')->get();
  return view('results.results')
    ->with('posts',$post)
    ->with('blog_name',App\Setting::first()->blog_name)
    ->with('blog_email',App\Setting::first()->blog_email)
    ->with('address',App\Setting::first()->address)
    ->with('phone',App\Setting::first()->phone_number)
    ->with('tags',App\Tag::all())
    // ->with('categories',App\Category::orderBy('created_at','DESC')->take(4)->get())
    ->with('categories',App\Category::orderBy('created_at','ASC')->take(4)->get())
    ->with('query',request('search'))
    ->with('title','Results : '. request('search'));
   })->name('results');




Route::get('/bene', function () {
 // return App\Category::find(3)->posts;
 //return App\Post::find(4)->category;
 //return App\Post::find(7)->tags;
 //return App\tag::find(8)->posts;
return view('bayan');
})->name('test');

// Route::get('/Test', function () {
//  return view('Test');
//  })->name('Test');
 

//  Route::get('/bnboon', 'PagesController@index'); 
//  Route::post('/uploadFile', 'PagesController@uploadFile');


//  Route::get ( '/bnbn', function () {
//   if (($handle = fopen ( public_path () . '/‫planet_36.957,34.95m5_37.157,35.067.osm.csv', 'r' )) !== FALSE) {
//     while ( ($data = fgetcsv ( $handle, 1000, ',' )) !== FALSE ) {

//         $csv_data = new Csvdata ();
//         $csv_data->nodes = $data [0];
//         $csv_data->node_id = $data [1];
//         if(!(isset($data[2])))
//         {$data[2]=null;
//         }
//         $csv_data->address = $data [2];
       
//         $csv_data->save (); 
//     }
//     fclose ( $handle );
//   }
//     $finalData = $csv_data::all ();

//     return view ( 'welcome1' )->withData ( $finalData );


// });