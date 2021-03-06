<?php

namespace LimeExtra;

class Controller extends \Lime\AppAware {

    protected $layout = false;

    public function __construct($app) {
        parent::__construct($app);

        $this->before();
    }

    public function index() {
        return "Please implement the index action";
    }

    protected function before() { }

    protected function render($view, $params = array()) {

        $view .= $this->layout ? " with ".$this->layout:"";

        return $this->app->view($view, $params);
    }

    protected function stop() {
        $this->app->stop();
    }
}