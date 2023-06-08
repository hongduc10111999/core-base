<?php

namespace Corebase\Option\Repositories\Option;

use Corebase\Post\Repositories\RepositoryInterface;

interface OptionRepositoryInterface extends RepositoryInterface
{
    /**
     * upLoadFile function
     *
     * @param [type] $request
     * @return void
     */
    public function uploadFile($request, $input);
}
