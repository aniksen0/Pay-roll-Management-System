<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/9/2021
 * Time: 4:46 AM
 */

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\loanModel;
use App\Models\userDataSimplifiedFile;
use App\Models\userstatusModel;
use App\Models\loanModelSimplified;
use App\Models\loanpercentage;
class loan extends Controller
{
    public $session;
    public $loan;
    public $user;
    public $loansimple;
    public $loanpercentage;
    public function __construct()
    {
        $this->session= session();
        $this->loan= new loanModel();
        $this->user=new userstatusModel();
        $this->loansimple=new loanModelSimplified();
        $this->loanpercentage=new loanpercentage();
    }
    public function index()
    {
        $data['loandata']=$this->loan->alldata();
        return view("loanMainPage_v",$data);
    }
    public function addloanepage()
    {
        $data['emp_info']=$this->user->alldata();
        return view("addloan_v",$data);
    }
    public function addloan()
    {
            $datanew=[
                'emp_id'=>$this->request->getPost('id'),
                'emp_loan_amount'=>$this->request->getPost('ela'),
                'emp_loan_max_amount'=>$this->request->getPost('elma'),
                'emp_deduction_loan_monthly'=>$this->request->getPost('edlm'),
                'emp_recurring_deduction'=>$this->request->getPost('erd'),
                'emp_warning_status'=>$this->request->getPost('ews'),
                'created_at'=>"",

            ];
        if ($this->loansimple->insert($datanew))
        {
            $this->session->setTempdata("success",' salary Data updated successfully',3);
            return redirect()->to('/loan/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! salary data didn\'t updated',3);
            return redirect()->to('/loan/');
        }
    }
    public function loanpercent()
    {
        $id="1";
        $data['loan']=$this->loanpercentage->find("1");
//        var_dump($data);
        return view("loanpercentage_v",$data);

    }
    public function addloanpercentage()
    {
        $data=[
            'id'=>1,
            'loanpercentage'=>$this->request->getPost("loanpercentage"),
        ];
        var_dump($data);

        if ($this->loanpercentage->save($data))
        {
            $this->session->setTempdata("success",'  Data updated successfully',3);
            return redirect()->to('/loan/loanpercent');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! salary data didn\'t updated',3);
            return redirect()->to('/loan/loanpercent');
        }


    }

}