<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/13/2021
 * Time: 11:53 PM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\loginModel;
class login extends Controller
{
    public $loginModal;
    public $session;
    public  function  __construct()
    {
        helper("form");
        helper("url");
        $this->loginModal=new loginModel();
        $this->session=session();
    }

    public function index()
    {
        $data=[];
        if ($this->request->getMethod()=="post")
        {
            $rules=[
                'id'=>'required',
                'pass'=>'required',
            ];
            if ($this->validate($rules))
            {
                $id= $this->request->getVar("id");
                $pass= $this->request->getVar("pass");
                //123456789
                $userdata=$this->loginModal->verifyid($id);
                if ($userdata)
                {
                    if (password_verify($pass,$userdata['pass']))
                    {
                        if ($userdata['status']=="active")
                        {
//                            $time = date("h:i:sa");
//                            $to ="oporicito007@gmail.com";
//                            $subject="You have logged in your account";
//                            $message = "Dear".$userdata['emp_name']."You have been logged in the PRMS system. Time:".date("h:i:sa")."<strong> If this is not you please contact ADMIN <i>ASAP</i></strong>";
//                            $email =\Config\Services::email();
//                            $email->setTo($userdata['emp_email']);
//                            $email->setSubject($subject);
//                            $email->setMessage($message);
//                            $email->setFrom("oporicito007@gmail.com","Info");
//                            if(!$email->send())
//                            {
//                                $data['error'] = $email->printDebugger(["headers"]);
//                                print_r($data);
//                            }


                            $this->session->setTempdata("id",$id);
                            $this->session->setTempdata("name",$userdata['emp_name']);
                            $this->session->setTempdata("img",$userdata['emp_img']);
                            $this->session->setTempdata("role",$userdata['emp_role']);
                            if ($userdata['emp_role']==1)
                            {
                                return redirect()->to('/adminAddHr');
                            }
                            else if ($userdata['emp_role']==2)
                            {
                                return redirect()->to('/dashboard');
                            }
                            else if ($userdata['emp_role']==3)
                            {
                                return redirect()->to('/userprofile');
                            }
                            else
                            {
                                $this->session->setTempdata("error",'Youre ip has been logged',3);
                                return redirect()->to(current_url());
                            }
                        }
                        else
                        {
                            $this->session->setTempdata("error",'sorry! you are not allowed to enter contact admin',3);
                            return redirect()->to(current_url());
                        }
                    }
                    else
                    {
                        $this->session->setTempdata("error",'sorry! id or pass does not match',3);
                        return redirect()->to(current_url());
                    }

                }
                else
                {
                    $this->session->setTempdata("error",'sorry! id or pass does not match',3);
                    return redirect()->to(current_url());
                }
            }
            else
            {
                echo "problem1";
                $data['validation']=$this->validator;
            }
        }
        return view("login_v",$data);
    }

}