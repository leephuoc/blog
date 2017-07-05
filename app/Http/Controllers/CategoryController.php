<?php
/**
 * Created by PhpStorm.
 * User: thanghepxp
 * Date: 30/06/2017
 * Time: 22:31
 */

namespace App\Http\Controllers;

use App\Category;
use Validator;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\CategoryRequest;

/**
 * Class CategoryController
 *
 * @package App\Http\Controllers
 */
class CategoryController extends Controller
{
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Function to get list category
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $params = !empty($request->all()) ? $request->all() : [];

        $category = new Category();
        
        /** @var array $res_categories Get list  data Category table */
        $view_data['categories'] = $category->get_list($params)->toArray();

        dd($view_data['categories']);
        
        // Init page web
        $view_data['name_page'] = 'Category';
        $view_data['title'] = 'Category';
        $view_data['active_menu'] = 'category';
        $view_data['active_sub_menu'] = 'list';
        return view('admin/category/index', isset($view_data) ? $view_data : []);
    }

    /**
     * Function to create category
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $view_data['name_page'] = 'Category';
        $view_data['title'] = 'Category';
        $view_data['active_menu'] = 'category';
        $view_data['active_sub_menu'] = 'create';
        return view('admin/category/create', isset($view_data) ? $view_data : []);
    }

    /**
     * Insert 1 record new into Category table
     *
     * @param CategoryRequest $request
     */
    public function store(CategoryRequest $request)
    {
        if($request->isMethod('POST'))
        {
            $category = new Category;
            $category->name = $request->name_category;
            $category->save();
            
            redirect('/admin/category');
        }
    }
    
    public function demo()
    {
        dd($this->_api('category'));
    }
}