<?php
namespace App\Repositories\Eloquent;
use Prettus\Repository\Eloquent\BaseRepository;
use App\Repositories\Contracts\AttachRepository;
use App\Models\Attach;
/**
 * Class CategoryRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class AttachRepositoryEloquent extends BaseRepository implements AttachRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Attach::class;
    }

}
