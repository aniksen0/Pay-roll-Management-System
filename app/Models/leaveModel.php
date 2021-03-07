<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/8/2021
 * Time: 1:29 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class leaveModel extends Model
{
    public function leavedata()
    {
        date_default_timezone_set("Asia/Dhaka");
        $year=date("Y");
        $month=date("m");
        $day=date("d");
        $date=date("Y-m-t");
        $realdate= $year."-".$month."-".$day;
        $query = $this->db->query("SELECT * FROM attendance WHERE attendance_date BETWEEN '$realdate' AND '$date' AND status1=1");
        $result = $query->getResult('array');

        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
            //  print_r($result);
            return $result;
        }
    }
    public function totalleave()
    {
        $query = $this->db->query("SELECT COUNT ()FROM attendance WHERE attendance_date BETWEEN '$realdate' AND '$date' AND status1=1");
        $result = $query->getResult('array');
    }

}