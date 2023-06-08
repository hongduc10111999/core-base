<?php

namespace Corebase\Post\Repositories\File;

use Corebase\Post\Repositories\RepositoryInterface;

interface FileRepositoryInterface extends RepositoryInterface
{
    /**
     * showRemoved function
     *
     * @return void
     */
    public function showRemoved();

    /**
     * restore function
     *
     * @param [type] $id
     * @return void
     */
    public function restore($id);

    /**
     * forceDelete function
     *
     * @param [type] $id
     * @return void
     */
    public function forceDelete($id);

    /**
     * upLoadFile function
     *
     * @param [type] $request
     * @return void
     */
    public function uploadFile($request,$input);
}
