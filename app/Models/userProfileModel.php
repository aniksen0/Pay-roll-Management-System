<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/17/2021
 * Time: 4:36 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class userProfileModel extends Model
{

    public  function loaddata($id)
    {
//        $sql="SELECT * from empinfo WHERE emp_id=?";
//        $query=$this->db->query($sql,array($id));
//        $result=$query->getResult();
//
//        if (count($result)<1)
//        {
//            return "no data here";
//        }
//        else
//        {
//
//            return $result;
//        }
        $builder= $this->db->table("empinfo");
        $builder->select("*");
        $builder->where('emp_id',$id);
        $result=$builder->get();
        if (count($result->getResultArray())==1)
        {
            return $result->getRowArray();
        }
        else
        {
            return "No data";
        }

        
    }
}