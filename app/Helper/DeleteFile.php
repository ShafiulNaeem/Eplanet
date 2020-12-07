<?php


namespace App\Helper;

use File;

trait DeleteFile
{
    /**
     * @param $path
     * @return bool
     */
    public static function deleteFile($path): bool
    {
        if(File::exists($path)) {
            return File::delete($path);
        }
        return false;
    }
}
