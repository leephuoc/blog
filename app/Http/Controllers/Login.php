<?php
/**
 * Created by PhpStorm.
 * User: thanghepxp
 * Date: 28/06/2017
 * Time: 20:30
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

/**
 * Class Login
 *
 * @package App\Http\Controllers
 */
class Login extends Controller
{
    /**
     * Authentication to login
     */
    public function index(Request $request)
    {


        $view_data['post'] = $request->all();
        return view('login/index');
    }
}