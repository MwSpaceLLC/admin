<?php

/**
 * @copyright 2021 | MwSpace llc, srl
 * @package mwspace/admin
 * @author Aleksandr Ivanovitch
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * @license http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * This class was developed to connect PHP frameworks with the packlink pro
 * shipping system. This library is unofficial and uses the connection protocols
 * of the cms. No copyright infringement.
 * Released, developed and maintain by MwSpace llc, srl.
 *
 */

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend e-shop Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('web')->prefix(config('admin.prefix'))->name('admin::')->group(function () {

    /**
     * Guest routes
     */
    Route::middleware('admin.guest')->prefix('/auth')->group(function () {

        Route::view('/', 'admin::auth.index')->name('login');
        Route::post('/', [\MwSpace\Admin\Controllers\Authenticate::class, 'post'])->name('login.post');

    });

    /**
     * Authenticate routes
     */
    Route::middleware('admin.auth')->group(function () {

        Route::view('/', 'admin::index');

    });
});
