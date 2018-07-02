Route::get('/about-me', MyPortfolioController@showAboutMe);

Route::get('/education', MyPortfolioController@showEducation);

Route::get('/work-experience', MyPortfolioController@showWorkExperience);


Route::get('/skills', function()
{
return 'Hello World';
});

Route::get('/other-projects', function(){
return 'Hello World';
});

Route::get('/project-1', function(){
return 'Hello World';
});

Route::get('/project-1', function(){
return 'Hello World';
});

Route::get('/resume', function(){
return 'Hello World';
});