<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/17/2021
 * Time: 3:35 AM
 */

namespace App\Controllers;


use CodeIgniter\Controller;

class logout extends Controller
{
    public function  index()
    {
        session()->destroy();
        session()->remove("id");
        session()->remove("name");
        session()->remove("img");
        return redirect()->to("/login");
    }
}