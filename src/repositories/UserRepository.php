<?php

namespace Jsdecena\Comments\repositories;

use Illuminate\Database\Eloquent\Model;
use Jsdecena\Baserepo\BaseRepository;
use Jsdecena\Baserepo\BaseRepositoryInterface;

class UserRepository extends BaseRepository implements BaseRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        parent::__construct($model);
    }

    /**
     * @param int $user_id
     *
     * @return mixed
     */
    public function findUserById(int $user_id)
    {
        return $this->find($user_id);
    }
}