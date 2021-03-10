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
        date_default_timezone_set("Asia/Dhaka");
        $year=date("Y");
        $month=date("m");
        $day=date("d");
        $date=date("Y-m-t");
        $realdate= $year."-".$month."-".$day;
        $query = $this->db->query("SELECT count(DISTINCT (emp_id)) as nai  FROM attendance WHERE attendance_date BETWEEN '$realdate' AND '$date' AND status1=1;");
        $result = $query->getResult('array');
        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
            //  print_r($result);
            return $result[0];
        }
    }
    public function totalleavemonth()
    {
        $query = $this->db->query("SELECT count(attendance_date)as leavemonth FROM attendance WHERE status1='1'");
        $result = $query->getResult('array');
        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
            //  print_r($result);
            return $result[0];
        }
    }
    public function totalsickmonth()
    {
        $query = $this->db->query("SELECT count(attendance_date)as sickmonth FROM attendance WHERE status1='2'");
        $result = $query->getResult('array');
        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
            //  print_r($result);
            return $result[0];
        }
    }
    public function totalabsentmonth()
    {
        $query = $this->db->query("SELECT count(attendance_date)as absentmonth FROM attendance WHERE status1='4'");
        $result = $query->getResult('array');
        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
            //  print_r($result);
            return $result[0];
        }
    }

}