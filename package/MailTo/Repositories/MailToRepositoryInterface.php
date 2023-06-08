<?php

namespace Corebase\MailTo\Repositories;

use App\Repositories\RepositoryInterface;

interface MailToRepositoryInterface extends RepositoryInterface
{
    /**
     * upLoadFile function
     *
     * @param [type] $request
     * @return void
     */
    public function uploadFile($request, $input);

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

    public function store($request);
}
