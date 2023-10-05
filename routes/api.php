<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DetalleIngresoController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/articulo", [ArticuloController::class, "index"]);
Route::post("/articulo", [ArticuloController::class, "store"]);
Route::get("/articulo/{id}", [ArticuloController::class, "show"]);
Route::patch("/articulo/{id}", [ArticuloController::class, "update"]);
Route::delete("/articulo/{id}", [ArticuloController::class, "destroy"]);

Route::get("/cliente", [ClienteController::class, "index"]);
Route::post("/cliente", [ClienteController::class, "store"]);
Route::get("/cliente/{id}", [ClienteController::class, "show"]);
Route::patch("/cliente/{id}", [ClienteController::class, "update"]);
Route::delete("/cliente/{id}", [ClienteController::class, "destroy"]);

Route::get("/detalleingreso", [DetalleIngresoController::class, "index"]);
Route::post("/detalleingreso", [DetalleIngresoController::class, "store"]);
Route::get("/detalleingreso/{id}", [DetalleIngresoController::class, "show"]);
Route::patch("/detalleingreso/{id}", [DetalleIngresoController::class, "update"]);
Route::delete("/detalleingreso/{id}", [DetalleIngresoController::class, "destroy"]);

Route::get("/detalleVenta", [DetalleVentaController::class, "index"]);
Route::post("/detalleVenta", [DetalleVentaController::class, "store"]);
Route::get("/detalleVenta/{id}", [DetalleVentaController::class, "show"]);
Route::patch("/detalleVenta/{id}", [DetalleVentaController::class, "update"]);
Route::delete("/detalleVenta/{id}", [DetalleVentaController::class, "destroy"]);

Route::get("/trabajador", [TrabajadorController::class, "index"]);
Route::post("/trabajador", [TrabajadorController::class, "store"]);
Route::get("/trabajador/{id}", [TrabajadorController::class, "show"]);
Route::patch("/trabajador/{id}", [TrabajadorController::class, "update"]);
Route::delete("/trabajador/{id}", [TrabajadorController::class, "destroy"]);

Route::get("/venta", [VentaController::class, "index"]);
Route::post("/venta", [VentaController::class, "store"]);
Route::get("/venta/{id}", [VentaController::class, "show"]);
Route::patch("/venta/{id}", [VentaController::class, "update"]);
Route::delete("/venta/{id}", [VentaController::class, "destroy"]);
