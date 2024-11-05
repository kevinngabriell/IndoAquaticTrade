<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfilController;
use App\Models\Blog;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
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
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id', 'zh'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});


Route::get('/sitemap', function () {
    // Paginate the latest blogs (e.g., 4 per page)
    $latestBlogs = Blog::latest()->paginate(4);

    // Paginate the regular blogs (e.g., 6 per page)
    $blogs = Blog::paginate(6);

    // Start creating the XML
    $xml = new SimpleXMLElement('<urlset/>');
    $xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

    // Add latest blogs to the XML
    foreach ($latestBlogs as $latestBlog) {
        $url = $xml->addChild('url');
        $url->addChild('loc', 'https://indoaquatictrade.com/blogs/' . $latestBlog->slug);
        $url->addChild('lastmod', $latestBlog->updated_at->toIso8601String());
        $url->addChild('changefreq', 'weekly');
        $url->addChild('priority', '0.7'); // Higher priority for the latest blogs
    }

    // Add regular blogs to the XML
    foreach ($blogs as $blog) {
        $url = $xml->addChild('url');
        $url->addChild('loc', 'https://indoaquatictrade.com/blogs/' . $blog->slug);
        $url->addChild('lastmod', $blog->updated_at->toIso8601String());
        $url->addChild('changefreq', 'weekly');
        $url->addChild('priority', '0.5');
    }

    // Set content type as XML
    $response = Response::make($xml->asXML(), 200);
    $response->header('Content-Type', 'application/xml');

    return $response;
});

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Cache cleared successfully';
});

Route::get('/clear-config-cache', function () {
    $exitCode = Artisan::call('config:clear');
    return 'Configuration cache cleared successfully';
});

Route::get('/clear-route-cache', function () {
    $exitCode = Artisan::call('route:clear');
    return 'Routes cache cleared successfully';
});

Route::get('/generate', function(){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
       echo 'ok';
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'aboutus']);
Route::get('/product', [HomeController::class, 'product']);
Route::get('/galleries', [HomeController::class, 'galleries']);
Route::get('/contact-us', [HomeController::class, 'contactus']);
Route::get('/blogs', [HomeController::class, 'blog']);
Route::get('/blogs/{slug}', [HomeController::class, 'blogdetail'])->name('blog.show');
Route::post('/upload-image', [ImageUploadController::class, 'upload'])->name('upload.image');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('about', AboutController::class)->middleware('auth:sanctum');
Route::resource('profil', ProfilController::class)->middleware('auth:sanctum');
Route::resource('hero', HeroController::class)->middleware('auth:sanctum');
Route::resource('gallery', GalleryController::class)->middleware('auth:sanctum');
Route::resource('portofolio', PortofolioController::class)->middleware('auth:sanctum');
Route::resource('blog', BlogController::class)->middleware('auth:sanctum');
// Route::resource('blog/{slug}', BlogController::class)->middleware('auth:sanctum');
// Route::get('blog/{blog:slug}', BlogController::class);
// Route::get('/', [FrontendController::class, 'index'])->name('home');
// Route::get('/blog/{blog:slug}', [FrontendController::class, 'blogDetails']);
Route::get('/blog/{blog:slug}', [BlogController::class, 'show']);
Route::get('/portofolio/{portofolio:id}', [PortofolioController::class, 'show']);