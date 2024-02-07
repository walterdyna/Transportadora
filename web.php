// Arquivo de rotas web.php
use App\Http\Controllers\TransportadoraController;
use Inertia\Inertia;

Route::middleware(['auth'])->group(function () {
    Route::get('/transportadoras', [TransportadoraController::class, 'index'])->name('transportadoras.index');
    // Defina outras rotas conforme necessário
});

// Rota para SPA fallback (Inertia.js)
Route::get('/{any}', function () {
    return Inertia::render('Welcome');
})->where('any', '.*');
