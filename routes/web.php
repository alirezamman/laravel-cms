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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/contact', function (){
//    return "به صفحه ما خوش آمدید";
//});
//Route::get('/about',function (){
//return "درباره ما";
//});
//Route::get('/post/{id}/{name?}', function ($id, $name=null){
//return 'آیدی این پست برابر است با:'.$id .$name;
//});
////Route::get('admin/posts/example', function(){
////    $url=route('admin');
////    return 'این ادرس برای مدیریت است و url برابر است با:' .$url;
////})->name('admin');
////
////Route::get('/admin/login', function ()
////{
////    return "صفحه ورود مدیریت";
////});
////Route::redirect('admin/login', '/admin/posts/example', 301);
//
//Route::prefix('user')->group(function (){
//    Route::get('posts/example', function (){
//        return "گروه بندی ادمین";
//    });
//    Route::get('login', function (){
//        return "صفحه لاگین";
//    });
//});
//Route::get('/contact', 'PostsController@contact');
//Route::get('/posts/{id?}', 'PostsController@index');
//Route::get('/show-view/{id}/{name}/{password}', 'PostsController@showMyView');
//Route::get('/insert', 'PostsController@insert');
//Route::get('/select', 'PostsController@select');
//Route::get('update', 'PostsController@updatepost');
//Route::get('delete', 'PostsController@deletepost');
//Route::get('posts', 'PostsController@getAllPosts');
//Route::get('save-post', 'PostsController@savepost');
//Route::get('update-post', 'PostsController@newupdatepost');
//Route::get('delete-post', 'PostsController@newdeletepost');
//Route::get('data-trash', 'PostsController@workwithtrash');
//Route::get('restore-post', 'PostsController@restorepost');
//Route::get('force-delete-post', 'PostsController@forcedelete');
//
//Route::get('user/{id}/posts', function ($id){
//    $user_post=\App\User::find(1)->post->content;
//    return $user_post;
//});
//Route::get('post/{id}/user', function ($id){
//    $post_user=\App\Post::find($id)->user;
//    return $post_user;
//});
//Route::get('user/{id}/posts', function ($id){
//    $user_posts= \App\User::find($id)->posts;
//    foreach ($user_posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});
//Route::get('user/{id}/roles',function ($id){
//   $user=\App\User::find($id);
//   foreach ($user->roles as $role){
//       echo $role->name;
//       echo '</br>';
//   }
//});
//Route::get('user/pivot',function (){
//    $user=\App\User::find(1);
//    foreach ($user->roles as $role){
//        echo $role->pivot->created_at;
//        echo "</br>";
//    }
//});
//Route::get('user/country',function (){
//   $country=\App\country::find(1);
//    foreach ($country->posts as $post) {
//        echo $post->title;
//        echo "</br>";
//   }
//});
//Route::get('user/photos',function (){
//    $user=\App\User::find(1);
//    foreach ($user->photos as $photo){
//        echo $photo->path;
//        echo "</br>";
//    }
//
//});
//Route::get('post/photos',function (){
//    $post =\App\Post::find(9);
//    foreach ($post->photos as $photo){
//        echo $photo->path;
//        echo "</br>";
//    }
//
//});
//Route::get('photo/{id}/post',function ($id){
//    $photo=\App\photo::find($id);
//    return $photo->imageable;
//});
//Route::get('post/tags', function (){
//    $post=\App\Post::find(9);
//    foreach ($post->tags as $tag){
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//Route::get('video/tags', function (){
//    $video=\App\video::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//Route::get('tag/{id}/post',function ($id) {
//    $tag = \App\photo::find($id);
//    foreach ($tag->posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});
//Route::get('/create',function (){
//    $user=\App\User::find(1);
//    $post=new \App\Post();
//    $post->title='one to many';
//    $post->content='content';
//    $post->body='body';
//
//    $user->posts()->save($post);
//});
//Route::get('/read',function (){
//    $user=\App\User::find(1);
//    foreach ($user->posts as $post){
//        echo $post->title;
//        echo "</br>";
//    }
//});
//Route::get('/update',function (){
//    $user=\App\User::find(1);
//    $user->posts()->whereId(10)->update(['title'=>'tc', 'content'=>'cc']);
//});
//Route::get('/delete',function (){
//    $user=\App\User::find(1);
//    $user->posts()->whereId(10)->delete();
//});
//Route::get('create', function (){
//   $user=\App\User::find(1);
//   $role=new \App\Role();
//   $role->name='نویسنده';
//   $user->roles()->save($role);
//});
//Route::get('read',function (){
//   $user=\App\User::find(1);
//   foreach ($user->roles as $role){
//       echo $role->name;
//       echo "</br>";
//   }
//});
//Route::get('update',function (){
//    $user=\App\User::find(1);
//    if($user->has('roles')){
//        foreach ($user->roles as $role){
//            if($role->name=='نویسنده'){
//                $role->name='author';
//                $role->save();
//            }
//        }
//    }
//});
//Route::get('delete',function (){
//    $user=\App\User::find(1);
//    foreach ($user->roles as $role){
//        if($role->name == 'author'){
//            $role->delete();
//        }
//    }
//});
//Route::get('detach',function (){
//    $user=\App\User::find(1);
//    $user->roles()->detach();
//});
//route::get('attach',function (){
//    $user=\App\User::find(1);
//    $user->roles()->attach(1);
//});
//route::get('sync',function (){
//    $user=\App\User::find(1);
//    $user->roles()->sync([2,3,4]);
//})
//Route::get('/create', function (){
//    $video=\App\video::find(1);
//    $video->tags()->create(['name'=>'morph video']);
//});
//Route::get('/read', function (){
//    $video=\App\video::find(1);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "</br>";
//    }
//});
//Route::get('/update', function (){
//    $video=\App\video::find(1);
//    $tag=$video->tags;
//    $newtags=$tag->where('id',3)->first();
//    $newtags->name='new tag';
//    $newtags->save();
//});
//Route::get('delete',function (){
//    $video=\App\video::find(1);
//    $tag=$video->tags;
//    $deletedtag=$tag->where('id,3')->first();
//    $deletedtag->delete();
//});
//Route::get('detach',function (){
//    $video=\App\video::find(1);
//    $video->tags()->detach();
//});
//Route::get('attach',function (){
//    $video=\App\video::find(1);
//    $video->tags()->attach(1);
//});
//Route::get('sync',function (){
//    $video=\App\video::find(1);
//    $video->tags()->sync([1,2]);
//});


//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('file',function (){
//   $file=\Illuminate\Support\Facades\Storage::disk('public')->get('images/aL6OaDsxULl1DwQG6YHEsahTF9wwgXEpAYxQ7TwR.png');
//
//   return \Illuminate\Support\Facades\Storage::disk('public')->download('images/aL6OaDsxULl1DwQG6YHEsahTF9wwgXEpAYxQ7TwR.png');
//});

//Auth::routes(['verify'=>true]);
//
//Route::get('/home', 'HomeController@index')->name('home');
Auth::routes(['verify'=>true]);

Route::middleware(['auth','verified'])->group(function (){
    Route::get('/home', 'HomeController@index')->middleware(['Auth','verified'])->name('home');
    Route::resource('/posts','PostsController');

});
Route::get('/');
//Route::get('/admin',function (){
//    echo "Hello to admin page";
//})->middleware('isAdmin');
Route::get('session', function (\Illuminate\Http\Request $reqest){
//    $reqest->session()->put(["username"=>"reza"]);
//    return $reqest->session()->get('username');
//    session(["email"=>"reza@gmail.com"]);
//    $reqest->session()->forget('username');
//    $reqest->session()-flush();
    $reqest->session()->reflash('message', 'post has been created');
    return $reqest->session()->get('message');
});
//یک تغییر ایجاد شد
