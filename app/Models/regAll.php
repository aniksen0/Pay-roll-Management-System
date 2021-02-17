<?php

/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/14/2021
 * Time: 3:56 AM
 */
namespace App\Models;
use \CodeIgniter\Model;

class regAll extends Model
{

    public function createUser($data)
    {
        $builder = $this->db->table("empinfo");

        $res= $builder->insert($data);
        
        if ($this->db->affectedRows()>0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}