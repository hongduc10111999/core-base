<?php

namespace Corebase\Profile\Repositories;

use App\Classes\UploadFile;
use App\Repositories\BaseRepository;
use Corebase\Profile\Models\Comments;

class CommentRepository extends BaseRepository implements CommentRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Comments::class;
    }

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
     * upLoadFile function
     *
     * @param [type] $request
     * @return void
     */
    public function uploadFile($request, $input)
    {
        $file = new UploadFile();
        $file->request = $request;
        $fileName = $file->upload($input);
        return $fileName;
    }

    /**
     * showRemoved function
     *
     * @return void
     */
    public function showRemoved()
    {
        $data = $this->model->onlyTrashed()->get();
        return $data;
    }

    /**
     * restore function
     *
     * @param [type] $id
     * @return void
     */
    public function restore($id)
    {
        return $this->model->withTrashed()->find($id)->restore();
    }

    /**
     * forceDelete function
     *
     * @param [type] $id
     * @return void
     */
    public function forceDelete($id)
    {
        return $this->model->withTrashed()->find($id)->forceDelete();
    }

    public function addNewComment($request)
    {
        $data = $request->all();

        $newComment = [
            'name' => $data['newName'],
            'website' => $data['newWeb'],
            'email' => $data['newEmail'],
            'post_id' => $data['id_post'],
            'content' => $data['newMessage'],
            'parent' => 0,
            'avatar' => 'profile.jpg'
        ];
        $comment = $this->model->create($newComment);
        $comments = $this->model->where(['post_id' => $data['id_post']])->get();

        return ['data' => $comment, 'countComment' => count($comments)];
    }

    public function addReplyComment($request)
    {

        $data = $request->all();
        $newReplyComment = [
            'name' => $data['name'],
            'post_id' => $data['post_id'],
            'content' => $data['content'],
            'parent' => $data['parent'],
            'avatar' => 'profile.jpg'
        ];
        $replyComment = $this->model->create($newReplyComment);
        $comments = $this->model->where(['post_id' => $data['post_id']])->get();

        return ['data' => $replyComment, 'countComment' => count($comments)];
    }
}
