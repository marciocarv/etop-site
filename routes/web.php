<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetodologiaController;
use App\Http\Controllers\QuemController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\InstitutionalController;
use App\Http\Controllers\MethodologyController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\PackController;
use App\Http\Controllers\ShowcaseController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Vimeo_courseController;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [SiteController::class, 'home'])->name('home');

Route::get('/quemsomos', [SiteController::class, 'quem'])->name('quemsomos');
Route::get('/institucional', [InstitutionalController::class, 'institutional'])->middleware(['auth'])->name('institutional');
Route::get('/institucional/editar/{id}', [InstitutionalController::class, 'setUpdate'])->middleware(['auth'])->name('set-update-institutional');
Route::post('/institucional/editar', [InstitutionalController::class, 'update'])->middleware(['auth'])->name('update-institutional');

Route::get('/metodologia', [SiteController::class, 'metodologia'])->name('metodologia');
Route::get('/metodologia/mostrar', [MethodologyController::class, 'methodology'])->middleware(['auth'])->name('methodology');
Route::get('/metodologia/editar/{id}', [MethodologyController::class, 'setUpdate'])->middleware(['auth'])->name('set-update-methodology');
Route::post('/metodologia/editar', [MethodologyController::class, 'update'])->middleware(['auth'])->name('update-methodology');

Route::get('/contato', [SiteController::class, 'contato'])->name('contato');
Route::post('/contato/enviar', [ContactController::class, 'store'])->name('store-contact');
Route::get('/contato/listar', [ContactController::class, 'contact'])->middleware(['auth'])->name('contact');
Route::get('/contato/visualizar/{id}', [ContactController::class, 'viewContact'])->middleware(['auth'])->name('view-contact');
Route::get('/contato/apagar/{id}', [ContactController::class, 'delete'])->middleware(['auth'])->name('delete-contact');

Route::get('/plataforma-2', [SiteController::class, 'vimeo_course'])->name('vimeo_course_site');

Route::get('/noticia/{id}', [SiteController::class, 'viewNotice'])->name('viewNotice_site');
Route::get('/noticias', [SiteController::class, 'notice'])->name('notice_site');

Route::get('/pacote/', [SiteController::class, 'pack'])->name('pack_site');
Route::get('/pacote/{id}', [SiteController::class, 'viewPack'])->name('viewPack_site');
Route::get('/pacote/{category}/{id}', [SiteController::class, 'packByCategory'])->name('pack-by-category_site');

Route::get('/modulo/{id}', [SiteController::class, 'viewModule'])->name('viewModule_site');
Route::get('/modulo/', [SiteController::class, 'module'])->name('module_site');

Route::get('/cursos/categoria', [CategoryController::class, 'category'])->middleware(['auth'])->name('category');
Route::post('/cursos/add-categoria', [CategoryController::class, 'store'])->middleware(['auth'])->name('store-category');
Route::get('/cursos/categoria/apagar/{id}', [CategoryController::class, 'delete'])->middleware(['auth'])->name('delete-category');
Route::get('/cursos/categoria/editar/{id}', [CategoryController::class, 'setUpdate'])->middleware(['auth'])->name('set-update-category');
Route::post('/cursos/categoria/editar', [CategoryController::class, 'update'])->middleware(['auth'])->name('update-category');

Route::get('/cursos/modulo', [ModuleController::class, 'module'])->middleware(['auth'])->name('module');
Route::post('/cursos/add-modulo', [ModuleController::class, 'store'])->middleware(['auth'])->name('store-module');
Route::get('/cursos/modulo/apagar/{id}', [ModuleController::class, 'delete'])->middleware(['auth'])->name('delete-module');
Route::get('/cursos/modulo/editar/{id}', [ModuleController::class, 'setUpdate'])->middleware(['auth'])->name('set-update-module');
Route::post('/cursos/modulo/editar', [ModuleController::class, 'update'])->middleware(['auth'])->name('update-module');
Route::get('/cursos/modulo/visualizar/{id}', [ModuleController::class, 'view'])->middleware(['auth'])->name('view-module');

Route::get('/cursos/pacote', [PackController::class, 'pack'])->middleware(['auth'])->name('pack');
Route::post('/cursos/pacote/add-pacote', [PackController::class, 'store'])->middleware(['auth'])->name('store-pack');
Route::get('/cursos/pacote/apagar/{id}', [PackController::class, 'delete'])->middleware(['auth'])->name('delete-pack');
Route::get('/cursos/pacote/editar/{id}', [PackController::class, 'setUpdate'])->middleware(['auth'])->name('set-update-pack');
Route::post('/cursos/pacote/editar', [PackController::class, 'update'])->middleware(['auth'])->name('update-pack');
Route::get('/cursos/pacote/add-modulos/{id}', [PackController::class, 'setAddModules'])->middleware(['auth'])->name('set-add-modules');
Route::post('/cursos/pacote/add-modulo', [PackController::class, 'addModules'])->middleware(['auth'])->name('add-modules');
Route::get('/cursos/pacote/visualizar/{id}', [PackController::class, 'view'])->middleware(['auth'])->name('view-pack');

Route::get('/vitrine', [ShowcaseController::class, 'showcase'])->middleware(['auth'])->name('showcase');
Route::post('/vitrine/add-vitrine', [ShowcaseController::class, 'store'])->middleware(['auth'])->name('store-showcase');
Route::get('/vitrine/apagar/{id}', [ShowcaseController::class, 'delete'])->middleware(['auth'])->name('delete-showcase');
Route::get('/vitrine/editar/{id}', [ShowcaseController::class, 'setUpdate'])->middleware(['auth'])->name('set-update-showcase');
Route::post('/vitrine/editar', [ShowcaseController::class, 'update'])->middleware(['auth'])->name('update-showcase');
Route::get('/vitrine/visualizar/{id}', [ShowcaseController::class, 'view'])->middleware(['auth'])->name('view-showcase');
Route::get('/vitrine/ocultar/{id}', [ShowcaseController::class, 'hidden'])->middleware(['auth'])->name('hidden-showcase');
Route::get('/vitrine/mostrar/{id}', [ShowcaseController::class, 'show'])->middleware(['auth'])->name('show-showcase');

Route::get('/midia/noticia', [NoticeController::class, 'notice'])->middleware(['auth'])->name('notice');
Route::post('/midia/add-noticia', [NoticeController::class, 'store'])->middleware(['auth'])->name('store-notice');
Route::get('/midia/noticia/apagar/{id}', [NoticeController::class, 'delete'])->middleware(['auth'])->name('delete-notice');
Route::get('/midia/noticia/editar/{id}', [NoticeController::class, 'setUpdate'])->middleware(['auth'])->name('set-update-notice');
Route::post('/midia/noticia/editar', [NoticeController::class, 'update'])->middleware(['auth'])->name('update-notice');
Route::get('/midia/noticia/visualizar/{id}', [NoticeController::class, 'view'])->middleware(['auth'])->name('view-notice');

Route::get('/plataforma2', [Vimeo_courseController::class, 'vimeo_course'])->middleware(['auth'])->name('vimeo_course');
Route::post('/plataforma2/add', [Vimeo_courseController::class, 'store'])->middleware(['auth'])->name('store-vimeo_course');
Route::get('/plataforma2/apagar/{id}', [Vimeo_courseController::class, 'delete'])->middleware(['auth'])->name('delete-vimeo_course');
Route::get('/plataforma2/editar/{id}', [Vimeo_courseController::class, 'setUpdate'])->middleware(['auth'])->name('set-update-vimeo_course');
Route::post('/plataforma2/editar', [Vimeo_courseController::class, 'update'])->middleware(['auth'])->name('update-vimeo_course');
Route::get('/plataforma2/visualizar/{id}', [Vimeo_courseController::class, 'view'])->middleware(['auth'])->name('view-vimeo_course');


Route::get('/dashboard', function () {
    return view('sistema.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
