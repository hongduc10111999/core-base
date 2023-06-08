<?php

namespace Corebase\Post\Repositories\Post;

use Corebase\Post\Repositories\RepositoryInterface;

interface PostRepositoryInterface extends RepositoryInterface
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

    public function createPost($request);

    public function updatePost($request, $id);

    public function getPostViaUser($userId);

    public function exportPost();

    public function importPost($request);

    public function importPostOld($request);
}
