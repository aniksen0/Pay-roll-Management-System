<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/7/2021
 * Time: 12:41 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class attendanceModel extends Model
{
    public function data()
    {
        date_default_timezone_set("Asia/Dhaka");
        $date=date("Y-m-d");
        $query = $this->db->query("SELECT * FROM attendance WHERE attendance_date= '$date'");
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
    
}