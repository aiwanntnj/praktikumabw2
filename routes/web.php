<?php
use App\Http\Controllers\NilaiController;

Route::get('/nilai/{mahasiswaId}', [NilaiController::class, 'showNilaiMahasiswa'])->name('tampilnilai');

