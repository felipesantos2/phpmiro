<?php

namespace app\controllers;

use app\traits\View;

/**
 * Abstract controller with basic methods and a routing pattern
 *
 * GET	        /photos	              -> index
 * GET	        /photos/create	      -> create
 * POST	        /photos	              -> store
 * GET	        /photos/{photo}	      -> show
 * GET	        /photos/{photo}/edit  -> edit
 * PUT/PATCH	/photos/{photo}	      -> update
 * DELETE	    /photos/{photo}	      -> destroy
 *
 * Inspired by Laravel
 *
 *  @link https://laravel.com/docs/13.x/controllers
 */
abstract class Controller
{
    use View;

    // /photos
    public function index() {}

    // /photos/create
    public function create() {}

    // photos
    public function store() {}

    // photos/{photo}
    public function show() {}

    // photos/{photo}/edit
    public function edit() {}

    // photos/{photo}
    public function update() {}

    // photos/{photo}
    public function destroy() {}
}
