<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/19/2021
 * Time: 1:01 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class salaryModel extends Model
{
    protected $table ="salary";
    protected $primaryKey="emp_id";
    protected $allowedFields=[
        "emp_id",
        "emp_basic_salary",
        "emp_allowances",
        "emp_skills_record",
        "emp_qualification",
        "emp_training_record",
        "emp_bank_account",
        "emp_bank_name",
        "emp_nomination",
    ];



    

}