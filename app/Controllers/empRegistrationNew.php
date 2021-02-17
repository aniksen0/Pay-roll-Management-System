<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/15/2021
 * Time: 5:56 PM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\regAll;

class empRegistrationNew extends Controller
{
    public $registration;
    public function __construct()
    {

        helper("form");
        $this->registration=new regAll();
    }

    public function index()
    {
        $active=[];
        $active['active']=["active_menu_link"];
        $data=[];
        $data['validation']=null;
//        $rules=
//            [
//                "name" => "required|min_length[4]|max_length[20]",
//                "email"=>"required|valid_email",
//                "password"=> "required|max_length[20]|min_length[8]",
//                "cpw" => "required|matches[pw]",
//                "mobile"=> "required|exact_length[11]|numeric",
//            ];
        if($this->request->getMethod()=="post")
        {

//            if ($this->validate($rules))
//            {
                $userdata=[
                    "emp_name"=> $this->request->getVar("name",FILTER_SANITIZE_STRING),
                    "emp_email"=>$this->request->getVar("email"),
                    "pass"=>password_hash($this->request->getVar("password"),PASSWORD_DEFAULT),
                    "emp_dob"=>$this->request->getVar("dob"),
                    "emp_address"=>$this->request->getVar("address"),
                    "emp_local_address" =>"eikhane",
                    "emp_local_contact_number" =>"123456789",
                    "emp_address_overseas" =>"nainai",
                    "emp_father_name"=>$this->request->getVar("f_name"),
                    "emp_motherName"=>$this->request->getVar("m_name"),
                    "emp_nationality"=>$this->request->getVar("nationality"),
                    "emp_blood_group"=>$this->request->getVar("blood"),
                    "emp_gender"=>$this->request->getVar("gender"),
                    "emp_attendance_machine_code"=>$this->request->getVar("amc"),
                    "emp_department"=>$this->request->getVar("dept"),
                    "emp_division"=>$this->request->getVar("div"),
                    "emp_branch"=>$this->request->getVar("branch"),
                    "emp_designation"=>$this->request->getVar("designation"),
                    "emp_joining_date"=>$this->request->getVar("jod"),
                    "emp_agreement_date"=>$this->request->getVar("AGD"),
                    "emp_labor_contract_type"=>$this->request->getVar("lcd"),
                    "emp_role "=>$this->request->getVar("role"),
                    "emp_visa_status"=>$this->request->getVar("visa_status"),
                    "emp_working_hours"=>$this->request->getVar("wh"),
                    "emp_over_time"=>$this->request->getVar("ot"),
                    "emp_eligibility"=>$this->request->getVar("eligibility"),
                    "emp_contact_number"=>$this->request->getVar("ec"),
                    "emp_img"=>"null",





                ];
                if($this->registration->createUser($userdata))
                {
                    $data['success']="Data Inserted";
                }
                else
                {
                    $data['error']= "please try again, there is a problem";
                }
            }
            else
            {
                $data['validation']=$this->validator;
            }
//        }
        return view("emp_reg",$active);
    }

}