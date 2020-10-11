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

Auth::routes();

Route::resource('/', 'QuestionnaireController');
//makes ValidateRequests class available to the view and controller
Route::group(['middle' => ['web']], function () {
  Route::resource('questionnaires', 'QuestionnaireController');

  });
//forwards call to controller
Route::resource('questions', 'QuestionController');
//gets questions.blade.php and displays the view
Route::get('/admin/questions/questions', function() {
    return view ('admin.questions.questions');
});

//forwards call to controller
Route::resource('answers', 'AnswerController');
//gets answers.blade.php and displays the view
Route::get('/admin/answers/answers', function() {
    return view ('admin.answers.answers');
});
