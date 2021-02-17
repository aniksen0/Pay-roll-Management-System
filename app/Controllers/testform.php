<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/15/2021
 * Time: 9:43 PM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\testformm;
class testform extends Controller
{
    public $registration;
    public function __construct()
    {

        helper("form");
        $this->registration=new testformm();
    }
    public function index()
    {
        if($this->request->getMethod()=="post")
        {
            $userdata=[
                "name"=> $this->request->getVar("name"),
                "email"=> "Same as you",
                "phone"=> $this->request->getVar("phone"),
                "birth"=> $this->request->getVar("birth"),
            ];
            if($this->registration->insertdata($userdata))
            {
                echo"Inserted";
            }
            else
            {
                echo "please try again, there is a problem";
            }
        }
        return view("testform1");
    }


}