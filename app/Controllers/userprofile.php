<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/17/2021
 * Time: 4:08 AM
 */

namespace App\Controllers;


use CodeIgniter\Controller;
use App\Models\userProfileModel;
class userprofile extends Controller
{
    public $attendanceData;
    public $userdata;
    public function __construct()
    {
        $this->userdata=new userProfileModel();
    }
    public function index()
    {
        if (!session()->has('id'))
    {
        return redirect()->to("/login");
    }
        $id=session()->getTempdata("id");
        $data['emp_info']=$this->userdata->loaddata($id);

        return view("userprofile_v",$data);
    }
    public function userviewHr($id)
    {
        $data['emp_info']=$this->userdata->loaddata($id);
        return view("userprofileHr_v",$data);
    }

}