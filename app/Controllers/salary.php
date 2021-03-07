<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/18/2021
 * Time: 11:47 PM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\salaryModel;
use App\Models\datajoin;
use App\Models\userDataSimplifiedFile;

class salary extends Controller
{
    public $session;
    public $salaryModel;
    public $datajoin;
    public $empname;
    public function __construct()
    {
        $this->session=session();
        $this->salaryModel = new salaryModel();
        $this->empname = new userDataSimplifiedFile();
        $this->datajoin=new datajoin();
    }
    public function index()
    {
        $data['emp_salary']=$this->datajoin->salarydatajoin();
        return view("salary_v",$data);
    }


    public  function addsalary()
    {
        $new["emp_salary"]=$this->empname->findAll();
//        var_dump($new);

        return view("addsalary_v",$new);

    }
    public function addsalary1()
    {
        $data=[
            "emp_id"=>$this->request->getPost("id"),
            "emp_basic_salary"=>$this->request->getPost("ebs"),
            "emp_allowances"=>$this->request->getPost("ea"),
            "emp_skills_record"=>$this->request->getPost("esr"),
            "emp_qualification"=>$this->request->getPost("eq"),
            "emp_training_record"=>$this->request->getPost("etr"),
            "emp_bank_account"=>$this->request->getPost("eba"),
            "emp_bank_name"=>$this->request->getPost("ebn"),
            "emp_nomination"=>$this->request->getPost("en"),
        ];

        if ($this->salaryModel->insert($data))
        {
            $this->session->setTempdata("success",' salary Data updated successfully',3);
            return redirect()->to('/salary/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! salary data didn\'t updated',3);
            return redirect()->to('/salary/');
        }

    }



    public function  salarydelete($id)
        {
            $yes=$this->salaryModel->delete($id);
            if ($yes)
            {
                $this->session->setTempdata("success",'Data updated successfully',3);
                return redirect()->to('/salary/');
            }
            else
            {
                $this->session->setTempdata("error",'sorry! data didn\'t updated',3);
                return redirect()->to('/salary/');
            }
        }
    public function salaryupdateedit($id)
    {
        $data['emp_salary']=$this->salaryModel->find($id);
        return view("salaryupdate_v",$data);
    }
    public function salaryupdate($id)
    {
        $this->salaryModel->find($id);
        $data=[
            "emp_id"=>$this->request->getPost("id"),
            "emp_basic_salary"=>$this->request->getPost("ebs"),
            "emp_allowances"=>$this->request->getPost("ea"),
            "emp_skills_record"=>$this->request->getPost("esr"),
            "emp_qualification"=>$this->request->getPost("eq"),
            "emp_training_record"=>$this->request->getPost("etr"),
            "emp_bank_account"=>$this->request->getPost("eba"),
            "emp_bank_name"=>$this->request->getPost("ebn"),
            "emp_nomination"=>$this->request->getPost("en"),
        ];
        $yes=$this->salaryModel->save($data);
        if ($yes)
        {
            $this->session->setTempdata("success",'Data updated successfully',3);
            return redirect()->to('/salary/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! data didn\'t updated',3);
            return redirect()->to('/salary/');
        }

    }

}