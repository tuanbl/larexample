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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hoclaravel', function () {
    return "<h1>Wellcome</h1>";
});
Route::get('/thongtin','Controller@showinfo');
Route::get('/thong-tin-{id}-{phone}',function($id,$phone){
    return "XIn chào $id <br>Your phone: $phone";
});

Route::get('/thong-tin-{id}{slug?}',function($id,$name="KFC"){
    return "XIn chào $id <br>$name";
});
/* alias */
Route::get('/hoc-lap-trinh-di-thang-ngu',['as'=>'ngu',function(){
    return '<h1>Bạn  ngu như bò';
}]);
/*
Route::get('mon-an/bun-bo',function(){
    return "Bún bò";
});
Route::get('mon-an/bun-mam',function(){
    return "Bún mắm";
});
*/

/* group */

Route::group(['prefix'=>'thuc-don'],function(){
  Route::get('bun-bo',function(){
      return "Bún bò";
  });
  Route::get('bun-mam',function(){
      return "Bún mắm";
  });
  Route::get('{name}',function($name){
      return "This is $name";
  });
});
Route::get('goiview',function(){
   /// return view("layout.widget.footer");
    return view("layout.header");
});
View::share('title','Lap trinh laravel 5.4');
View::share('array',['Lap trinh laravel 5.4','Lap trinh']);
View::composer(['layout.widget.footer','layout.header'],function($view){
    return $view->with('thongtin','day la trang ca nhan ne');
});
Route::get('check-view',function(){
   if(view()->exists('xindex')){
       return view("xindex");
   }else{
       return '<h1>404 view not found</h1>';
   }
});
Route::get("call-{name}",function($name){
    if(view()->exists("views.".$name)){
        return view("views.".$name);
    }
    return '<h1>404</h1>';

});


Route::get("url/full",function(){
	return URL::full();

});
Route::get("url/assets",function(){
	return asset('template/syle.css');

});
Route::get('url/to',function(){
    return URL::to('thong-tin',['1','xin-chao'],true);
});
Route::get('url/secure',function(){
    return secure_url('thong-tin',['1','xin-chao']);
});
Route::get('schema/create',function(){

    //Schema::dropIfExists('khoapham');

    return  Schema::create('khoapham', function($table)
   {
       $table->increments('id');
       $table->string('tenmonhoc',100);
       $table->integer('gia');
       $table->text('ghichu')->nullable();
       $table->timestamps();
    //   $table->index('tenmonhoc');
    //   $table->unique('tenmonhoc');
   });
});
Route::get('schema/rename',function(){
   return Schema::rename('khoapham','renameTable');
});
Route::get('schema/drop',function(){
   Schema::dropIfExists('khoapham');
});
Route::get('schema/change-cal-attr',function(){
    Schema::table('khoapham',function($table){
       $table->string('tenmonhoc',100)->change();
    });
});
Route::get('schema/create/cate',function(){
   Schema::create('category',function($table){
        $table->increments('id');
        $table->string('name');
        $table->timestamps();
   });
});
Route::get('schema/create/product',function(){
   Schema::create('product',function($table){
        $table->increments('id');
        $table->string('name');
        $table->integer('price');
        $table->integer('cate_id')->unsigned();
        //$table->foreign('cate_id')->references('id')->on('cate')->onDelete('cascade');
        $table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');
        $table->timestamps();
   });
});
