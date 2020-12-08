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

    /**
     * @param $status
     * @param $model
     * @param $id
     * @return bool
     */
    public static function changeStatus($status, $model, $id):bool
    {
        ( $status == 1 ) ? $status = 0 : $status = 1;

        return ( $model::where('id', $id)->update([
            'status' => $status
        ]) ) ;
    }
}
