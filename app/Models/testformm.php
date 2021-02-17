<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/16/2021
 * Time: 9:37 PM
 */

namespace App\Models;

use CodeIgniter\Model;

class testformm extends Model
{
   public  function insertdata($data){

       $eita= $this->db->table("user");
       $eita->insert($data);
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