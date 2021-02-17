<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/17/2021
 * Time: 1:08 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class loginModel extends Model
{
    public function verifyid($id)
    {
        $builder= $this->db->table("empinfo");
        $builder->select("emp_name,emp_role,pass,emp_img,status,emp_email");
        $builder->where('emp_id',$id);
        $result=$builder->get();
      if (count($result->getResultArray())==1)
      {
        return $result->getRowArray();
      }
        else
        {
            return false;
        }


    }


}