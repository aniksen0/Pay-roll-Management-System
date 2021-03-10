<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/9/2021
 * Time: 4:52 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class loanModel extends Model
{

    public function alldata()
    {
        $query = $this->db->query("SELECT * FROM loan");
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
    public function loanpercentage()
    {
        $query = $this->db->query("SELECT * FROM loanpercentage WHERE id='1'");
        $result = $query->getResult();

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