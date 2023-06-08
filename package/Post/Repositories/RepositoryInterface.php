<?php

namespace Corebase\Post\Repositories;

interface RepositoryInterface
{

    /**
     * Get's a post by it's ID
     *
     * @param int
     */
    public function find($post_id);

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
    public function delete($post_id);

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data);

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
}
