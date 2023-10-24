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

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [UserController::class, 'loginView'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login'])->name('login.post');

Route::get('/', [PageController::class,'home'])->name('home');
Route::get('/research-and-innovations', [PageController::class,'researchAndInnovations'])->name('research-and-innovations');
Route::get('/research-and-innovations/{slug}', [PageController::class,'researchAndInnovationsShow'])->name('research-and-innovations.view');
Route::get('/about-us', [PageController::class,'aboutUs'])->name('about-us');
Route::get('/team', [PageController::class,'team'])->name('team');
Route::get('/partners', [PageController::class,'partners'])->name('partners');
Route::get('/publications', [PageController::class,'publications'])->name('publications');
Route::get('/news', [PageController::class,'news'])->name('news');
Route::get('/news/{slug}', [PageController::class,'newsShow'])->name('news.view');
Route::get('/contact-us', [PageController::class,'contactUs'])->name('contact-us');
Route::get('/programs-and-projects', [PageController::class,'programsAndProjects'])->name('programs-and-projects');
Route::get('/programs-and-projects/program/{slug}', [PageController::class,'programsShow'])->name('programs.view');
Route::get('/programs-and-projects/project/{slug}', [PageController::class,'projectsShow'])->name('projects.view');

Route::group(['middleware'=>'auth', 'prefix' => 'admin'],function (){
    Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware("auth");
    Route::get('/', function () { return view('pages.admin.dashboard'); })->name('dashboard');
    Route::post('/pages', [PageController::class,'update'])->name('pages.update');
    Route::get('/pages/home', [PageController::class,'editHome'])->name('pages.home');
    Route::get('/pages/about-us', [PageController::class,'editAboutUs'])->name('pages.about-us');
    Route::get('/pages/research-and-innovations', [PageController::class,'editResearchAndInnovations'])->name('pages.research-and-innovations');
    Route::get('/pages/team', [PageController::class,'editTeam'])->name('pages.team');
    Route::get('/pages/partners', [PageController::class,'editPartners'])->name('pages.partners');
    Route::post('/upload', [PageController::class,'upload']);

    Route::group(["prefix"=>"programs"], function (){
        Route::get('/', [ProgramController::class, "index"])->name('programs.index');
        Route::get('/create', [ProgramController::class, "create"])->name('programs.create');
        Route::post('/store', [ProgramController::class, "store"])->name('programs.store');
        Route::get('/edit/{slug}', [ProgramController::class, "edit"])->name('programs.edit');
        Route::post('/update/{slug}', [ProgramController::class, "update"])->name('programs.update');
        Route::get('/view/{slug}', [ProgramController::class, "show"])->name('programs.show');
        Route::get('/delete/{slug}', [ProgramController::class, "trash"])->name('programs.trash');
    });

    Route::group(["prefix"=>"projects"], function (){
        Route::get('/', [ProjectController::class, "index"])->name('projects.index');
        Route::get('/create', [ProjectController::class, "create"])->name('projects.create');
        Route::post('/store', [ProjectController::class, "store"])->name('projects.store');
        Route::get('/edit/{slug}', [ProjectController::class, "edit"])->name('projects.edit');
        Route::post('/update/{slug}', [ProjectController::class, "update"])->name('projects.update');
        Route::get('/view/{slug}', [ProjectController::class, "show"])->name('projects.show');
        Route::get('/delete/{slug}', [ProjectController::class, "trash"])->name('projects.trash');
    });

    Route::group(["prefix"=>"news"], function (){
        Route::get('/', [NewsController::class, "index"])->name('news.index');
        Route::get('/create', [NewsController::class, "create"])->name('news.create');
        Route::post('/store', [NewsController::class, "store"])->name('news.store');
        Route::get('/edit/{slug}', [NewsController::class, "edit"])->name('news.edit');
        Route::post('/update/{slug}', [NewsController::class, "update"])->name('news.update');
        Route::get('/view/{slug}', [NewsController::class, "show"])->name('news.show');
        Route::get('/delete/{slug}', [NewsController::class, "trash"])->name('news.trash');
    });

    Route::group(["prefix"=>"publications"], function (){
        Route::get('/', [PublicationController::class, "index"])->name('publications.index');
        Route::get('/create', [PublicationController::class, "create"])->name('publications.create');
        Route::post('/store', [PublicationController::class, "store"])->name('publications.store');
        Route::get('/edit/{slug}', [PublicationController::class, "edit"])->name('publications.edit');
        Route::post('/update/{slug}', [PublicationController::class, "update"])->name('publications.update');
        Route::get('/view/{slug}', [PublicationController::class, "show"])->name('publications.show');
        Route::get('/delete/{slug}', [PublicationController::class, "trash"])->name('publications.trash');
    });

    Route::group(["prefix"=>"research-and-innovations"], function (){
        Route::get('/', [ResearchController::class, "index"])->name('research-and-innovations.index');
        Route::get('/create', [ResearchController::class, "create"])->name('research-and-innovations.create');
        Route::post('/store', [ResearchController::class, "store"])->name('research-and-innovations.store');
        Route::get('/edit/{slug}', [ResearchController::class, "edit"])->name('research-and-innovations.edit');
        Route::post('/update/{slug}', [ResearchController::class, "update"])->name('research-and-innovations.update');
        Route::get('/view/{slug}', [ResearchController::class, "show"])->name('research-and-innovations.show');
        Route::get('/delete/{slug}', [ResearchController::class, "trash"])->name('research-and-innovations.trash');
    });
});

//Route::group(['prefix' => 'icons'], function(){
//    Route::get('feather-icons', function () { return view('pages.icons.feather-icons'); });
//    Route::get('mdi-icons', function () { return view('pages.icons.mdi-icons'); });
//});

/*Route::group(['prefix' => 'email'], function(){
    Route::get('inbox', function () { return view('pages.email.inbox'); });
    Route::get('read', function () { return view('pages.email.read'); });
    Route::get('compose', function () { return view('pages.email.compose'); });
});

Route::group(['prefix' => 'apps'], function(){
    Route::get('chat', function () { return view('pages.apps.chat'); });
    Route::get('calendar', function () { return view('pages.apps.calendar'); });
});

Route::group(['prefix' => 'ui-components'], function(){
    Route::get('accordion', function () { return view('pages.ui-components.accordion'); });
    Route::get('alerts', function () { return view('pages.ui-components.alerts'); });
    Route::get('badges', function () { return view('pages.ui-components.badges'); });
    Route::get('breadcrumbs', function () { return view('pages.ui-components.breadcrumbs'); });
    Route::get('buttons', function () { return view('pages.ui-components.buttons'); });
    Route::get('button-group', function () { return view('pages.ui-components.button-group'); });
    Route::get('cards', function () { return view('pages.ui-components.cards'); });
    Route::get('carousel', function () { return view('pages.ui-components.carousel'); });
    Route::get('collapse', function () { return view('pages.ui-components.collapse'); });
    Route::get('dropdowns', function () { return view('pages.ui-components.dropdowns'); });
    Route::get('list-group', function () { return view('pages.ui-components.list-group'); });
    Route::get('media-object', function () { return view('pages.ui-components.media-object'); });
    Route::get('modal', function () { return view('pages.ui-components.modal'); });
    Route::get('navs', function () { return view('pages.ui-components.navs'); });
    Route::get('navbar', function () { return view('pages.ui-components.navbar'); });
    Route::get('pagination', function () { return view('pages.ui-components.pagination'); });
    Route::get('popovers', function () { return view('pages.ui-components.popovers'); });
    Route::get('progress', function () { return view('pages.ui-components.progress'); });
    Route::get('scrollbar', function () { return view('pages.ui-components.scrollbar'); });
    Route::get('scrollspy', function () { return view('pages.ui-components.scrollspy'); });
    Route::get('spinners', function () { return view('pages.ui-components.spinners'); });
    Route::get('tabs', function () { return view('pages.ui-components.tabs'); });
    Route::get('tooltips', function () { return view('pages.ui-components.tooltips'); });
});

Route::group(['prefix' => 'advanced-ui'], function(){
    Route::get('cropper', function () { return view('pages.advanced-ui.cropper'); });
    Route::get('owl-carousel', function () { return view('pages.advanced-ui.owl-carousel'); });
    Route::get('sortablejs', function () { return view('pages.advanced-ui.sortablejs'); });
    Route::get('sweet-alert', function () { return view('pages.advanced-ui.sweet-alert'); });
});

Route::group(['prefix' => 'forms'], function(){
    Route::get('basic-elements', function () { return view('pages.forms.basic-elements'); });
    Route::get('advanced-elements', function () { return view('pages.forms.advanced-elements'); });
    Route::get('editors', function () { return view('pages.forms.editors'); });
    Route::get('wizard', function () { return view('pages.forms.wizard'); });
});

Route::group(['prefix' => 'charts'], function(){
    Route::get('apex', function () { return view('pages.charts.apex'); });
    Route::get('chartjs', function () { return view('pages.charts.chartjs'); });
    Route::get('flot', function () { return view('pages.charts.flot'); });
    Route::get('peity', function () { return view('pages.charts.peity'); });
    Route::get('sparkline', function () { return view('pages.charts.sparkline'); });
});

Route::group(['prefix' => 'tables'], function(){
    Route::get('basic-tables', function () { return view('pages.tables.basic-tables'); });
    Route::get('data-table', function () { return view('pages.tables.data-table'); });
});



Route::group(['prefix' => 'general'], function(){
    Route::get('blank-page', function () { return view('pages.general.blank-page'); });
    Route::get('faq', function () { return view('pages.general.faq'); });
    Route::get('invoice', function () { return view('pages.general.invoice'); });
    Route::get('profile', function () { return view('pages.general.profile'); });
    Route::get('pricing', function () { return view('pages.general.pricing'); });
    Route::get('timeline', function () { return view('pages.general.timeline'); });
});

Route::group(['prefix' => 'auth'], function(){
    Route::get('login', function () { return view('pages.auth.login'); });
    Route::get('register', function () { return view('pages.auth.register'); });
});

Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});*/

// 404 for undefined routes
Route::any('/{page?}',function(){
    return View::make('pages.error.404');
})->where('page','.*');
