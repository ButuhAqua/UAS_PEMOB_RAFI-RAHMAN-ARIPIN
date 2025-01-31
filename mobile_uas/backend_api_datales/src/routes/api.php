<?php

use App\Filament\Admin\Resources\CatatanResource\Api\Handlers\CreateHandler as CatatanCreateHandler;
use App\Filament\Admin\Resources\CatatanResource\Api\Handlers\DeleteHandler as CatatanDeleteHandler;
use App\Filament\Admin\Resources\CatatanResource\Api\Handlers\DetailHandler as CatatanDetailHandler;
// Catatan
use App\Filament\Admin\Resources\CatatanResource\Api\Handlers\PaginationHandler as CatatanPaginationHandler;
use App\Filament\Admin\Resources\CatatanResource\Api\Handlers\UpdateHandler as CatatanUpdateHandler;
use App\Filament\Admin\Resources\JadwalResource\Api\Handlers\CreateHandler as JadwalCreateHandler;
use App\Filament\Admin\Resources\JadwalResource\Api\Handlers\DeleteHandler as JadwalDeleteHandler;
use App\Filament\Admin\Resources\JadwalResource\Api\Handlers\DetailHandler as JadwalDetailHandler;
// Jadwal
use App\Filament\Admin\Resources\JadwalResource\Api\Handlers\PaginationHandler as JadwalPaginationHandler;
use App\Filament\Admin\Resources\JadwalResource\Api\Handlers\UpdateHandler as JadwalUpdateHandler;
use App\Filament\Admin\Resources\PengajarResource\Api\Handlers\CreateHandler as PengajarCreateHandler;
use App\Filament\Admin\Resources\PengajarResource\Api\Handlers\DeleteHandler as PengajarDeleteHandler;
use App\Filament\Admin\Resources\PengajarResource\Api\Handlers\DetailHandler as PengajarDetailHandler;
// Pengajar
use App\Filament\Admin\Resources\PengajarResource\Api\Handlers\PaginationHandler as PengajarPaginationHandler;
use App\Filament\Admin\Resources\PengajarResource\Api\Handlers\UpdateHandler as PengajarUpdateHandler;
use App\Filament\Admin\Resources\SiswaResource\Api\Handlers\CreateHandler as SiswaCreateHandler;
use App\Filament\Admin\Resources\SiswaResource\Api\Handlers\DeleteHandler as SiswaDeleteHandler;
use App\Filament\Admin\Resources\SiswaResource\Api\Handlers\DetailHandler as SiswaDetailHandler;
// Siswa
use App\Filament\Admin\Resources\SiswaResource\Api\Handlers\PaginationHandler as SiswaPaginationHandler;
use App\Filament\Admin\Resources\SiswaResource\Api\Handlers\UpdateHandler as SiswaUpdateHandler;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')->group(function () {
    // Protected route
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Catatan
    Route::prefix('catatans')->group(function () {
        Route::post('/', [CatatanCreateHandler::class, 'handler'])->name('api.catatans.create');
        Route::get('/', [CatatanPaginationHandler::class, 'handler'])->name('api.catatans.pagination');
        Route::get('/{id}', [CatatanDetailHandler::class, 'handler'])->name('api.catatans.detail');
        Route::put('/{id}', [CatatanUpdateHandler::class, 'handler'])->name('api.catatans.update');
        Route::delete('/{id}', [CatatanDeleteHandler::class, 'handler'])->name('api.catatans.delete');
    });

    // Jadwal
    Route::prefix('jadwals')->group(function () {
        Route::post('/', [JadwalCreateHandler::class, 'handler'])->name('api.jadwals.create');
        Route::get('/', [JadwalPaginationHandler::class, 'handler'])->name('api.jadwals.pagination');
        Route::get('/{id}', [JadwalDetailHandler::class, 'handler'])->name('api.jadwals.detail');
        Route::put('/{id}', [JadwalUpdateHandler::class, 'handler'])->name('api.jadwals.update');
        Route::delete('/{id}', [JadwalDeleteHandler::class, 'handler'])->name('api.jadwals.delete');
    });

    // Pengajar
    Route::prefix('pengajars')->group(function () {
        Route::post('/', [PengajarCreateHandler::class, 'handler'])->name('api.pengajars.create');
        Route::get('/', [PengajarPaginationHandler::class, 'handler'])->name('api.pengajars.pagination');
        Route::get('/{id}', [PengajarDetailHandler::class, 'handler'])->name('api.pengajars.detail');
        Route::put('/{id}', [PengajarUpdateHandler::class, 'handler'])->name('api.pengajars.update');
        Route::delete('/{id}', [PengajarDeleteHandler::class, 'handler'])->name('api.pengajars.delete');
    });

    // Siswa
    Route::prefix('siswas')->group(function () {
        Route::post('/', [SiswaCreateHandler::class, 'handler'])->name('api.siswas.create');
        Route::get('/', [SiswaPaginationHandler::class, 'handler'])->name('api.siswas.pagination');
        Route::get('/{id}', [SiswaDetailHandler::class, 'handler'])->name('api.siswas.detail');
        Route::put('/{id}', [SiswaUpdateHandler::class, 'handler'])->name('api.siswas.update');
        Route::delete('/{id}', [SiswaDeleteHandler::class, 'handler'])->name('api.siswas.delete');
    });
});
