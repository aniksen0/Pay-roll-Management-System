<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/9/2021
 * Time: 7:51 AM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\userstatusModel;
use App\Models\salaryslipModel;

class salaryslip extends Controller
{
    public $session;
    public $userinfo;
    public $salary;
    public function __construct()
    {
        $this->session=session();
        $this->userinfo = new userstatusModel();
        $this->salary= new salaryslipModel();
    }
    public function index()
    {
        $data['users']=$this->userinfo->dataforsalary();
        return view("salarySlipMainPage_v",$data);
    }
    public function salaryview($id)
    {
        echo $id;
        $data["empsalary"]=$this->salary->salaryslipempinfosalary($id);
        $data["worktime"]=$this->salary->worktime($id);
        $data["loan"]=$this->salary->loan($id);
        $data['paidleave']=$this->salary->paidleave($id);
        $data['unpaidleave']=$this->salary->unpaidleave($id);
        $data['totalwork']=$this->salary->totalwork($id);
    
        return view("salaryslip",$data);
    }

}