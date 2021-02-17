<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/17/2021
 * Time: 3:27 AM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\userstatusModel;
class dashboard extends Controller
{
    public $datastatus;
    public function __construct()
    {
        $this->datastatus=new userstatusModel();
    }
    public function index()
    {
        if (!session()->has('id'))
        {
            return redirect()->to("/login");
        }
        else
        {
            if(session()->getTempdata('role')==2)
            {
                return view("dashboard_v");
            }
            else
            {
                return redirect()->to("/login");

            }
        }


    }
    public function userstatus()
    {
        if (!session()->has('id'))
        {
            return redirect()->to("/login");
        }
        $alldata['users']= $this->datastatus->alldata();

        return view("userstatus",$alldata);
    }

}