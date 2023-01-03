<?php

namespace PulsePhpBundle\DirectoryScanner;

/**
 * @Author Quentin MARCUZZI
 * @version 0.1
 * This class is used to scan a directory and get all files.
 */
class DirectoryScanner
{
    /**
     * This method scans a directory and returns all files.
     * It includes subdirectories.
     * @param string $dir The path of the directory to scan.
     * @return array The list of files.
     */
    public static function scanDirectory(string $dir): array
    {
        $files = [];

        $dirContent = scandir($dir);
        foreach ($dirContent as $item) {
            if ($item !== '.' && $item !== '..') {
                if (is_dir($dir . '/' . $item)) {
                    $files = array_merge($files, self::scanDirectory($dir . '/' . $item));
                } else {
                    $files[] = $dir . '/' . $item;
                }
            }
        }
        return $files;
    }
}