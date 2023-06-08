<?php

namespace Corebase\Page\Repositories\Page;

use Corebase\Post\Repositories\RepositoryInterface;

interface PageRepositoryInterface extends RepositoryInterface
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
    public function uploadFile($request, $input);

    /**
     * Undocumented function
     *
     * @return void
     */
    public function getAll();
}
