<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/18/2021
 * Time: 5:00 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class userDataSimplifiedFile extends Model
{
    protected $table ="empinfo";
    protected $primaryKey="emp_id";
    protected $allowedFields=[
        'emp_id',
        'emp_name',
        'emp_father_name',
        'emp_motherName',
        'emp_gender',
        'emp_dob',
        'emp_nationality',
        'emp_email',
        'emp_address',
        'emp_contact_number',
        'emp_local_address',
        'emp_local_contact_number',
        'emp_address_overseas',
        'emp_blood_group',
        'emp_attendance_machine_code',
        'emp_img',
        'emp_role ',
        'emp_department',
        'emp_division',
        'emp_branch',
        'emp_designation',
        'emp_joining_date',
        'emp_agreement_date',
        'emp_visa_status',
        'emp_labor_contract_type',
        'emp_working_hours',
        'emp_over_time',
        'emp_eligibility',
        'status',
        'jobtypes ',
        "emp_emergency_cn",

    ];
}