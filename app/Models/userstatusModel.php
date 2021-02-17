<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/17/2021
 * Time: 7:05 PM
 */

namespace App\Models;


use CodeIgniter\Model;

class userstatusModel extends Model
{
    public function alldata ()
    {

        $query=$this->db->query("SELECT * from empinfo");
        $result=$query->getResult();
        if (count($result)<1)
        {
            return "no data here";
        }
        else
        {
//            print_r($result);
            return $result;
        }
    }

}