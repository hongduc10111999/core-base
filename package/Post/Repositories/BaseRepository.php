<?php

namespace Corebase\Post\Repositories;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    /**
     * Set model
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * Get's a post by it's ID
     *
     * @param int
     * @return collection
     */
    public function find($post_id)
    {
        return $this->model->find($post_id);
    }

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Create a post
     *
     * @param array $attributes
     * @return void
     */
    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($post_id)
    {
        $this->model->destroy($post_id);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data)
    {
        $this->model->find($post_id)->update($post_data);
    }

    /**
     * findOneBy function
     *
     * @param array $criteria
     * @param array|null $orderBy
     * @return collection
     */
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        return $this->model->where($criteria, $orderBy)->first();
    }

    /**
     * findBy function
     *
     * @param array $criteria
     * @param array|null $orderBy
     * @return void
     */
    public function findBy(array $criteria, ?array $orderBy = null)
    {
        return $this->model->where($criteria, $orderBy)->get();
    }
}
