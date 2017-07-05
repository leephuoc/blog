<?php
/**
 * Created by PhpStorm.
 * User: thanghepxp
 * Date: 29/06/2017
 * Time: 22:18
 */

namespace App\Http\Controllers;

/**
 * Class Home
 * @package App\Http\Controllers
 */
class Home extends Controller
{
    /**
     * Home constructor.
     */
    public function __construct() {
    }

    /**
     * Function show dashboard
     */
    public function index() 
    {
        //

        return view('home/index');
    }
}