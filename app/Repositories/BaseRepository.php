<?php

namespace App\Repositories;

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
    public function find($id)
    {
        return $this->model->find($id);
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
    public function delete($id)
    {
        $this->model->destroy($id);
    }

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data)
    {
        $this->model->find($id)->update($data);
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
        return $this->model->where($criteria, $orderBy)->firstOrFail();
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

    public function softDelete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function showSoftDelete()
    {
        return $this->model->onlyTrashed()->get();
    }

    public function restore($id)
    {
        return $this->model->withTrashed()->where('id', $id)->restore();
    }
    public function forceDelete($id)
    {
        return $this->model->withTrashed()->where('id', $id)->forceDelete();
    }
}
