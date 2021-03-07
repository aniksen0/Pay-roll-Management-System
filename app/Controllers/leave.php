<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/7/2021
 * Time: 11:30 PM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\leaveModel;
use App\Models\userDataSimplifiedFile;
use App\Models\attendancesimplifiedModel;
class leave extends Controller
{
    public $userdata;
    public $leave;
    public $attendance;
    public $session;
    public function __construct()
    {
        $this->session=session();
        $this->leave=new leaveModel ();
        $this->userdata= new userDataSimplifiedFile();
        $this->attendance = new attendancesimplifiedModel();

    }
    public function index()
    {
        $data['emp_leave'] = $this->leave->leavedata();
        return view("leave_v",$data);
    }
    public function addleavepage()
    {
        $data["emp_info"]=$this->userdata->findAll();
        return view("addleave_v",$data);
    }
    public function addleave()
    {
        $from=strtotime($this->request->getPost("from"));
        $to=strtotime($this->request->getPost("to"));

        $fromday=date("d",$from);
        $dayto=date("d",$to);
        $month=date("m",$to);
        $year=date("Y",$to);
        for($i=$fromday;$i<=$dayto;$i++)
        {
            $fulldate=$year."-".$month."-".$i;

            $datanew=[
                "attendance_date"=>$fulldate,
                "emp_id "=>$this->request->getPost("emp_id"),
                "time_in"=>"'$fulldate' 00-00-00",
                "time_out"=>"'$fulldate' 00-00-00",
                "comments"=>$this->request->getPost("comments"),
                "overtime"=>"0",
                "status1"=>1,
                "created_by"=>$this->session->getTempdata("id").$this->session->getTempdata("name"),
                "total_time"=>"0",
            ];
            $this->attendance->insert($datanew);
        }
        return redirect()->to('/leave/');



    }

}