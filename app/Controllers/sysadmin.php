<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/18/2021
 * Time: 3:33 AM
 */

namespace App\Controllers;


use CodeIgniter\Controller;

class sysadmin extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        return view("sysadmin_v");
    }
    public function addHr()
    {
        return view("addhr");
    }
}