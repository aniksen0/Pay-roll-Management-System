<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/20/2021
 * Time: 7:00 AM
 */

namespace App\Controllers;


use App\Models\datajoin;
use CodeIgniter\Controller;
use App\Models\userDataSimplifiedFile;
use App\Models\workTimeModel;
class Worktime extends Controller
{
    public $userData;
    public $empinfo;
    public $session;
    public function __construct()
    {
        $this->userData= new workTimeModel();
        $this->session=session();
        $this->empinfo= new userDataSimplifiedFile();
    }
    public function index()
    {
       $data["emp_info"]=$this->userData->findAll();
        return view("worktime_v",$data);
    }
    public function addworktimepage()
    {
        $data["emp_info"]= $this->empinfo->findAll();
//        var_dump($data);
        return view("worktimeaddform_v",$data);
    }
    public function addworktime()
    {
        $data=[
        "emp_id"=>$this->request->getPost("emp_id"),
        "jobtypes"=>$this->request->getPost("jobtypes"),
        "worktimelimit"=>$this->request->getPost("worktimelimit"),
    ];

        $yes=$this->userData->insert($data);
        if ($yes)
        {
            $this->session->setTempdata("success",' Data updated successfully',3);
            return redirect()->to('/worktime/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! there is a problem',3);
            return redirect()->to('/worktime/');
        }


    }
    public function updateworktimepage($id)
    {
        $data["emp_info"]=$this->userData->find($id);

        return view("worktimeeditform_v",$data);

    }
    public function updateworktime($id)
    {
        $this->userData->find($id);
        $data=[
            "emp_id"=>$this->request->getPost("emp_id"),
            "jobtypes"=>$this->request->getPost("jobtypes"),
            "worktimelimit"=>$this->request->getPost("worktimelimit"),
        ];

        $yes=$this->userData->save($data);
        if ($yes)
        {
            $this->session->setTempdata("success",' Data updated successfully',3);
            return redirect()->to('/worktime/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! there is a problem',3);
            return redirect()->to('/worktime/');
        }
    }
}