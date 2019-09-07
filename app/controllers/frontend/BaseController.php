<?php

namespace App\Controllers\frontend;
use Psr\Container\ContainerInterface;

class BaseController

{
    protected $container;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    public function __get($property)
    {
        if($this->container->{$property}) {
            return $this->container->{$property};
        }
    }

}

?>