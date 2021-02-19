<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/19/2021
 * Time: 11:14 PM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\attendancesimplifiedModel;
class attendance extends  Controller
{
    public $attendanceSimplifiedModel;
    public $session;
    public function  __construct()
    {
        $this->session= session();
        $this->attendanceSimplifiedModel=new attendancesimplifiedModel();

    }
    public function index()
    {
        $data["emp_attendance"] = $this->attendanceSimplifiedModel->findAll();
        return view("attendance_v",$data);
    }
    public function updatepage($id)
    {
        $data["attendance_value"]= $this->attendanceSimplifiedModel->find($id);
        return view("attendanceUpdate_v",$data);
    }
    public function updateattendance($id)
    {
        $this->attendanceSimplifiedModel->find($id);
        $data=[
            "uiid"=>$this->request->getPost("uiid"),
            "attendance_date"=>$this->request->getPost("attendance_date"),
            "emp_id "=>$this->request->getPost("emp_id"),
            "time_in"=>$this->request->getPost("time_in"),
            "time_out"=>$this->request->getPost("time_out"),
            "comments"=>$this->request->getPost("comments"),
            "overtime"=>$this->request->getPost("overtime"),
            "status1"=>$this->request->getPost("status1"),
            "created_by"=>$this->session->getTempdata("id").$this->session->getTempdata("name"),
        ];
        $yes=$this->attendanceSimplifiedModel->save($data);
        if ($yes)
        {
            $this->session->setTempdata("success",' salary Data updated successfully',3);
           return redirect()->to('/attendance/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! salary data didn\'t updated',3);
            return redirect()->to('/attendance/');
        }
        
    }
    public function manualattendance($id)
    {
        return view("manualattendance_v");
    }

}