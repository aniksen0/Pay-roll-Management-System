<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/9/2021
 * Time: 5:53 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class loanModelSimplified extends Model
{
    protected $table ="loan";
    protected $primaryKey="emp_id";
    protected $allowedFields=[
    'emp_id',
    'emp_loan_amount',
    'emp_loan_max_amount',
    'emp_deduction_loan_monthly',
    'emp_recurring_deduction',
    'emp_warning_status',
    'created_at',
    ];
}