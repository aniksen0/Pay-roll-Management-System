<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/13/2021
 * Time: 11:42 PM
 */

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\regAll;

class EmpRegistration extends Controller
{
    public $registration;
    public function __construct()
    {
        helper('form');
        $this->registration= new regAll();

    }

    public  function index()
    {
        $data=[];
     $data['validation']=null;
        $rules=
            [
            "name" => "required|min_length[4]|max_length[20]",
            "email"=>"required|valid_email",
            "pw"=> "required|max_length[20]|min_length[8]",
            "cpw" => "required|matches[pw]",
            "mobile"=> "required|exact_length[11]|numeric",
        ];
        if($this->request->getMethod()=="post")
        {
            
            if ($this->validate($rules))
            {
               $userdata=[
                   "name"=> $this->request->getVar("name",FILTER_SANITIZE_STRING),
                   "email"=>$this->request->getVar("email"),
                   "password"=>password_hash($this->request->getVar("pw"),PASSWORD_DEFAULT),
                   "mobile"=>$this->request->getVar("mobile"),




               ];
                if($this->registration->createUser($userdata))
                {
                    echo"Inserted";
                }
                else
                {
                    echo "please try again, there is a problem";
                }
            }
            else
            {
                $data['validation']=$this->validator;
            }
        }
        return view("reg",$data);
    }

}