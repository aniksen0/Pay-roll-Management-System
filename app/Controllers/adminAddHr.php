<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/17/2021
 * Time: 9:08 PM
 */

namespace App\Controllers;


use CodeIgniter\Controller;

class adminAddHr extends Controller
{
    public $session;
    public function __construct()
    {
        $this->session= session();

    }

    public function index()
    {
        echo 'add HR system admin';
    }

}