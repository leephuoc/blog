<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /**
     * Function to __construct()
     */
    public function __construct() {

    }

    /**
     * @param String $content_layout
     * @param array $view_data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function _render($content_layout, $view_data = [])
    {
        
        $view_data['active_menu'] = '';
        $view_data['title'] = isset($view_data['title']) ? 'BLOG |' . $view_data['title'] : 'BLOG'; 
        return view($content_layout, $view_data);
    }

    public function _api($api_name, $data = [])
    {
        $client = new Client();
        $res = $client->request('GET', 'http://blog.dev/api/' . $api_name, [
            'form_params' => $data
        ]);

        return json_decode($res->getBody()->getContents(), true);
    }

    public function _insternal_api($api_name, $data = [])
    {
        $client = new Client();
        $res = $client->request('POST', 'http://blog.dev/api/' .$api_name, [
            'form_params' => $data
        ]);

        return json_decode($res->getBody()->getContents(), true);
    }
}