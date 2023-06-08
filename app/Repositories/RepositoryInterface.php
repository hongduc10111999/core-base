<?php

namespace App\Repositories;

interface RepositoryInterface
{

    /**
     * Get's a post by it's ID
     *
     * @param int
     */
    public function find($id);

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all();

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = []);

    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($id);

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data);

    /**
     * findOneBy function
     *
     * @param array $criteria
     * @param array|null $orderBy
     * @return void
     */
    public function findOneBy(array $criteria, ?array $orderBy = null);

    /**
     * findBy function
     *
     * @param array $criteria
     * @param array|null $orderBy
     * @return void
     */
    public function findBy(array $criteria, ?array $orderBy = null);

    public function softDelete($id);

    public function showSoftDelete();

    public function restore($id);

    public function forceDelete($id);
}
