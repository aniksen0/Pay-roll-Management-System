<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/3/2021
 * Time: 11:16 PM
 */

namespace App\Controllers;


use CodeIgniter\Controller;

class FormController extends Controller
{
    public function __construct()
    {
        helper("form");
    }

    public function index()
    {
        $data=[];
        $rules =
            [
                'name' => 'required',
                "email"=>"required|valid_email",
                "mobile"=>"required|numeric",

            ];
        if($this->request->getMethod()=='post') //post should be small letter
        {
            if($this->validate($rules))
            {
                echo "SUCCESS!";
                $data["ok"]="ok";

            }
            else
            {
                $data['validation']= $this->validator;
            }


        }
        return view("FormView",$data);

    }

}