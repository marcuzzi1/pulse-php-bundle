<?php

namespace PulsePhpBundle\Attributes;

use Attribute;

/**
 * @Author: Quentin MARCUZZI
 * @version : 0.1
 * This class is used to define a route with an attribute.
 */
#[Attribute]
class Route
{
    private string $path;
    private string $name;

    /**
     * Constructor of the class.
     * @param string $path The path of the route.
     * @param string $name The name of the route.
     */
    public function __construct(string $path, string $name)
    {
        $this->path = $path;
        $this->name = $name;
    }

    /**
     * @return string The path of the route.
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @return string The name of the route.
     */
    public function getName(): string
    {
        return $this->name;
    }
}