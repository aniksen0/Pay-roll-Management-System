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
use App\Models\userDataSimplifiedFile;
class dashboard extends Controller
{
    public $datastatus;
    public $employee;
    public $session;
    public function __construct()
    {
        helper("form");
        $this->datastatus=new userstatusModel();
        $this->session=session();
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
    public function useredit($id)
    {
        $this->employee=new userDataSimplifiedFile();
        $data['employee']=$this->employee->find($id);
        return view("useredit_v",$data);
    }
    public  function userupdate($id)
    {
        $this->employee=new userDataSimplifiedFile();
        $this->employee->find($id);
        $id=$this->request->getPost("id");
        $data=[
            'emp_id' =>$this->request->getPost("id"),
        'emp_name' =>$this->request->getPost("name"),
        'emp_father_name'=>$this->request->getPost("f_name"),
        'emp_motherName'=>$this->request->getPost("m_name"),
        'emp_gender'=>$this->request->getPost("gender"),
        'emp_dob'=>$this->request->getPost("dob"),
        'emp_nationality'=>$this->request->getPost("nationality"),
        'emp_email'=>$this->request->getPost("email"),
        
        'emp_contact_number'=>$this->request->getPost("mobile"),
        'emp_local_address'=>$this->request->getPost("address"),
        'emp_local_contact_number'=>$this->request->getPost("mobile"),
        'emp_address_overseas'=>$this->request->getPost("emp_address_overseas"),
        'emp_blood_group'=>$this->request->getPost("blood"),
        'emp_attendance_machine_code'=>$this->request->getPost("amc"),
        'emp_img'=>$this->request->getPost("id"),
        'emp_role '=>$this->request->getPost("role"),
        'emp_department'=>$this->request->getPost("dept"),
        'emp_division'=>$this->request->getPost("div"),
        'emp_branch'=>$this->request->getPost("branch"),
        'emp_designation'=>$this->request->getPost("designation"),
        'emp_joining_date'=>$this->request->getPost("jod"),
        'emp_agreement_date'=>$this->request->getPost("AGD"),
        'emp_visa_status'=>$this->request->getPost("visa_status"),
        'emp_labor_contract_type'=>$this->request->getPost("lcd"),
        'emp_working_hours'=>$this->request->getPost("wh"),
        'emp_over_time'=>$this->request->getPost("ot"),
        'emp_eligibility'=>$this->request->getPost("eligibility"),
        'status'=>"active",
        'jobtypes'=>$this->request->getPost("jobtypes"),
        'emp_emergency_cn'=>$this->request->getPost("ec"),

        ];
        if (!$this->employee->save($data))
        {
            $this->session->setTempdata("error",'sorry! data didn\'t updated' ,3);
            return redirect()->to('/dashboard/useredit'.$id);
        }
        else
        {
            $this->session->setTempdata("success",'Data updated successfully',3);
            return redirect()->to('/dashboard/useredit/'.$id);
        }


    }
    public function userdelete($id)
    {
            $this->employee = new userDataSimplifiedFile();
            $yes=$this->employee->delete($id);
        if ($yes)
        {
            $this->session->setTempdata("success",'Data updated successfully');
            return redirect()->to('/dashboard/userstatus/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! data didn\'t updated');
            return redirect()->to('/dashboard/userstatus/');
        }
    }

}