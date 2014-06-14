<?php

/**
 * Wrapper for \Silex\Application
 *
 * @author Elena
 */

namespace common;

class Application extends \Silex\Application {

    private $mounted_controllers = array();

    public function mount($prefix, $controllers)
    {
        //register controllers
        $this->mounted_controllers[$prefix] = $controllers;

        parent::mount($prefix, $controllers);

    }

    public function getMountedControllers() {
        return $this->mounted_controllers;
    }

}