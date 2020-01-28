 <?php




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



// front  routing
Route::get('/','WellcomeController@index');
Route::get('/contact','WellcomeController@contact');
Route::get('/service','WellcomeController@service');
Route::get('/about','WellcomeController@about');
Route::get('/gallery','WellcomeController@gallery');


// admin routing

Route::get('/admin','adminController@index');
Route::post('/admin_login','adminController@adminLogin');



Route::get('/dashboard','adminSuperController@index');
Route::get('/logout','adminSuperController@logout');
Route::get('/add_category','adminSuperController@add_category');

//Index Item
Route::get('/index_item','IndexController@IndexItem');
Route::post('/save-item','IndexController@saveItem');
Route::get('/unpublish-item/{id}','IndexController@unpublishItem');
Route::get('/publish-item/{id}','IndexController@publishItem');
 Route::get('/delete-item/{id}','IndexController@deleteItem');
Route::get('/edit-item/{id}','IndexController@editItem');

//slider
Route::get('/add_slider','IndexController@addSlider');
Route::post('/save-slider','IndexController@saveSlider');
Route::get('/unpublish-slider/{id}','IndexController@unpublishSlider');
Route::get('/publish-slider/{id}','IndexController@publishSlider');
Route::get('/delete-slider/{id}','IndexController@deleteSlider');
Route::get('/edit-slider/{id}','IndexController@editSlider');

//service
Route::get('/add_service_category','ServiceController@add_service_category');
Route::get('/unpublish-cat/{id}','ServiceController@unpublishCategory');
Route::get('/publish-cat/{id}','ServiceController@publishCategory');
Route::get('/delete-cat/{id}','ServiceController@deleteCategory');
Route::get('/edit-category/{id}','ServiceController@editCategory');
Route::post('/save-category','ServiceController@saveCategory');
Route::post('/update-cat/{id}','ServiceController@updateCategory');

//service post
Route::get('/service_post','ServiceController@servicePost');
Route::post('/service-save-post','ServiceController@serviceSavePost');
Route::get('/service-unpublish/{id}','ServiceController@unpublishService');
Route::get('/service-publish/{id}','ServiceController@publishService');
Route::get('/service-delete/{id}','ServiceController@deleteService');
Route::get('/service-edit/{id}','ServiceController@editService');
Route::post('/update-service-post/{id}','ServiceController@UpdateServicePost');



//gallery category
 
Route::get('/gallery_category','GalleryController@gallery_category');
Route::post('/save-categorys','GalleryController@saveCategory');
Route::get('/unpublish-category/{id}','GalleryController@unpublishCategory');
Route::get('/publish-category/{id}','GalleryController@publishCategory');
Route::get('/delete-category/{id}','GalleryController@deleteCategory');
Route::get('/edit-categorys/{id}','GalleryController@editCategory');
Route::post('/update-categorys/{id}','GalleryController@updateCategory');

// gallery post
Route::get('/gallery_post','GalleryController@gallery_post');
Route::get('/manage_gallery','GalleryController@manage_gallery');
Route::post('/save-post','GalleryController@savePost');
Route::post('/update-gallery-post/{id}','GalleryController@updateGalleryPost');
Route::get('/edit-post/{id}','GalleryController@editPost');
Route::get('/unpublish-post/{id}','GalleryController@unpublishPost');
Route::get('/publish-post/{id}','GalleryController@publishPost');
Route::get('/delete-post/{id}','GalleryController@deletePost');

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
