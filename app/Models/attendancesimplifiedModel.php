<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/19/2021
 * Time: 11:29 PM
 */

namespace App\Models;


use CodeIgniter\Model;

class attendancesimplifiedModel extends Model
{
    protected $table ="attendance";
    protected $primaryKey="uiid";
    protected $allowedFields=[
        "attendance_date",
        "emp_id ",
        "time_in",
        "time_out",
        "comments",
        "overtime",
        "status1",
        "created_by",

    ];

}