<?php

namespace PulsePhpBundle\Routes;

use Exception;
use PulsePhpBundle\DirectoryScanner\DirectoryScanner;

/**
 * @Author: Quentin MARCUZZI
 * @version : 0.1
 * This class is used to register and handle routes.
 */
class Router
{
    private array $routes;

    public function __construct()
    {
        $this->routes = [];
    }

    /**
     * This method scans the controllers' directory and register all routes.
     * @throws Exception
     */
    public function load(string $dir): void
    {
        // Empty the routes list
        $this->routes = [];

        // Getting the files list in "Controller" directory
        $scannedFiles = DirectoryScanner::scanDirectory($dir);

        // Verifying that the controllers' directory exists
        if (!is_dir($dir)) {
            throw new Exception('The directory you are trying to reach does not exist.');
        }

        // Iterating over the files list
        foreach ($scannedFiles as $scannedFile) {
            // TODO : complete this function
            // Getting the file path info
            $pathinfo = pathinfo($scannedFile);
            // Throw an exception if the file is not a PHP file
            if ($pathinfo['extension'] !== 'php') {
                throw new Exception('The file ' . $scannedFile . ' is not a PHP file.');
            }

        }
    }
}