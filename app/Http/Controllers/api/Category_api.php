<?php

namespace app\Http\Controllers\api;

require_once 'Base_api.php';

class Category_api extends Base_api
{
//    public function __construct()
//    {
//        parent::__construct();
//    }

    /**
     *
     *
     * @param array $params
     */
    public function get_list($params = [])
    {
        $content['abc'] = 123;
        $content['qwe'] = 123;
        return response($content);
    }

}