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
        if(isset($params['take'])) {
            $this->limit($params['take']);
        }

        return $this->get()->toArray();
    }
}