<?php

namespace Amaur\App\controller;

class HomePageController extends Controller {
    public function homePage() {
        self::render("home", "Block note");
    }
}