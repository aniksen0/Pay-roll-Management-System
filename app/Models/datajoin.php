<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/19/2021
 * Time: 6:31 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class datajoin extends Model
{
    public function salarydatajoin()
    {
        $query = $this->db->query("SELECT * FROM salary JOIN empinfo where salary.emp_id=empinfo.emp_id");
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
    public  function addsalaryModel()
    {
        
    }

}