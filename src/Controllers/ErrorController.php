<?php

namespace Controllers;


class ErrorController extends Controller {

    public function index() {
        $this->render('error.index');
    }
    public function permission() {
    	$this->render('error.permission');
    }
}
