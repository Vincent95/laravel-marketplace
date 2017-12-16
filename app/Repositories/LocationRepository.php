<?php namespace App\Repositories;

use Bosnadev\Repositories\Contracts\RepositoryInterface;
use Bosnadev\Repositories\Eloquent\Repository;
use App\Repositories\FindOrFailTrait;

class LocationRepository extends Repository
{
    use FindOrFailTrait;

    public function model()
    {
        return 'App\Location';
    }
}