<?php

namespace Corebase\Contact\Repositories;

use App\Repositories\BaseRepository;
use Corebase\Contact\Models\Contact;

class ContactRepository extends BaseRepository implements ContactRepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->setModel();
    }

    public function getModel()
    {
        return Contact::class;
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


}
