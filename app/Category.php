<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @package App
 */
class Category extends Model
{
    /** @var string  */
    protected $table = 'category';

    /**
     * Function to get list data
     * 
     * @param array $params
     * @return mixed
     */
    public function get_list($params = [])
    {

        $self = $this;
        if(!empty($params['where']) && is_array($params['where'])) {
            $self = $self->where($params['where']);
        }

        if(isset($params['offset'])) {
            $self = $self->offset($params['offset']);
        }

        // Limit record
        if(isset($params['limit'])) {
            $self = $self->limit($params['limit']);
        }

        // Search key
        if(isset($params['search'])) {

        }

        // Return
        return $self->paginate(5);
    }

    public function get_detail($params = [])
    {

    }
}