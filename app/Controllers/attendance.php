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
use App\Models\userDataSimplifiedFile;
use App\Models\attendanceModel;
class attendance extends  Controller
{
    public $attendanceSimplifiedModel;
    public $session;
    public $userdata;
    public $attendance;
    public function  __construct()
    {

        $this->session= session();
        $this->attendanceSimplifiedModel=new attendancesimplifiedModel();
        $this->userdata= new userDataSimplifiedFile();
        $this->attendance= new attendanceModel();

    }
    public function index()
    {
        $data["emp_attendance"] = $this->attendance->data();
        $year=date("Y");
        $month=date("m");
        $day=date("d");
        $realdate= $year."-".$month."-".$day;
//        print_r(($year));
//        print_r(($month));
//        print_r(($day));
        var_dump($data['emp_attendance']);
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
            $this->session->setTempdata("success",' Data updated successfully',3);
           return redirect()->to('/attendance/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! there is a problem',3);
            return redirect()->to('/attendance/');
        }
        
    }
    public function manualattendancepage()
    {
        $data["emp_info"]=$this->userdata->findAll();
        return view("manualattendance_v",$data);
    }
    public  function ManualAttendance()
    {
        $time1 = date('H:i:s',strtotime($this->request->getPost("time_in")));
        $time2 = date('H:i:s',strtotime($this->request->getPost("time_out")));
        $time1=strtotime($time1);
        $time2=strtotime($time2);
        if ($time1<$time2) {
            (int)$overTime = $time2 - $time1;
        }
        else
        {
            $this->session->setTempdata("Error",' Data didn\'t listed' ,3);
            return redirect()->to('/attendance/');
        }

        $data=[
            "attendance_date"=>$this->request->getPost("attendance_date"),
            "emp_id "=>$this->request->getPost("emp_id"),
            "time_in"=>$this->request->getPost("time_in"),
            "time_out"=>$this->request->getPost("time_out"),
            "comments"=>$this->request->getPost("comments"),
            "overtime"=>$overTime,
            "status1"=>$this->request->getPost("status1"),
            "created_by"=>$this->session->getTempdata("id").$this->session->getTempdata("name"),
        ];
        $yes=$this->attendanceSimplifiedModel->save($data);
        if ($yes)
        {
            $this->session->setTempdata("success",' success",\' Attendance listed',3);
            return redirect()->to('/attendance/');
        }
        else
        {
            $this->session->setTempdata("error",'sorry! there is a problem',3);
            return redirect()->to('/attendance/');
        }
    }

    public function automaticAttendance()
    {
        date_default_timezone_set("Asia/Dhaka");
        $datanew=[
            "uiid"=>"",
            "attendance_date"=>date('Y-m-d'),
            "emp_id "=>$this->request->getPost("emp_id"),
            "time_in"=>date('Y-m-d H:i:s'),
            "time_out"=>null,
            "comments"=>"",
            "overtime"=>null,
            "status1"=>3,
            "created_by"=>"system",
        ];
        var_dump($datanew);
        print_r($datanew);

        $yes=$this->attendanceSimplifiedModel->save($datanew);
        if ($yes)
        {
            $this->session->setTempdata("success",' Attendance listed',3);
            return redirect()->to('/userprofile');
        }
        else
        {
            $this->session->setTempdata("error",'sorry!  there is a problem',3);
            return redirect()->to('/userprofile');
        }
    }
    public function automaticAttendanceUpdate($id)
    {
       echo "didn't implemented yet".$id;
    }

}