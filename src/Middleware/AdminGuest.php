<?php

namespace MwSpace\Admin\Middleware;

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

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminGuest
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::guard('admin::user')->check()) {
            return redirect()->route('admin::index');
        }

        return $next($request);
    }
}
