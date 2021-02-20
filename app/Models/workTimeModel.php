<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/20/2021
 * Time: 6:47 PM
 */

namespace App\Models;

use CodeIgniter\Model;

class workTimeModel extends Model
{
    protected $table ="work_time";
    protected $primaryKey="emp_id";
    protected $allowedFields=[
        "emp_id",
        "jobtypes",
        "worktimelimit",
    ];
}