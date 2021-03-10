<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/9/2021
 * Time: 10:37 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class salaryslipModel extends Model
{
    public function salaryslipempinfosalary($id)
    {
        $query=$this->db->query("SELECT * from empinfo join salary where empinfo.emp_id=salary.emp_id");
        $result=$query->getResult();
        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
//            print_r($result);
            return $result[0];
        }
    }
    public function worktime($id)
    {
        $query=$this->db->query("SELECT * from work_time where emp_id=$id");
        $result=$query->getResult();
        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
//            print_r($result);
            return $result[0];
        }
    }
    public function loan($id)
    {
        $query=$this->db->query("SELECT * from loan where emp_id=$id");
        $result=$query->getResult();
        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
//            print_r($result);
            return $result[0];
        }
    }
    public function allattendance($id)
    {
        $query=$this->db->query("SELECT * from attendance where emp_id=$id");
        $result=$query->getResult();
        if (count($result)<1)
        {
            return $result=0;
        }
        else
        {
//            print_r($result);
            return $result;
        }
    }
    public function paidleave($id)
    {
        $query=$this->db->query("SELECT COUNT(attendance_date) as paidleave from attendance where emp_id=$id AND status1='1'");
        $result=$query->getResult();
        return $result[0];
    }
    public function unpaidleave($id)
    {
        $query=$this->db->query("SELECT COUNT(attendance_date) as unpaidleave from attendance where emp_id=$id AND status1='4'");
        $result=$query->getResult();
        return $result[0];
    }
    public function totalwork($id)
    {
        $query=$this->db->query("SELECT SUM(overtime) as totalwork from attendance where emp_id=$id");
        $result=$query->getResult();
        return $result[0];
    }


}