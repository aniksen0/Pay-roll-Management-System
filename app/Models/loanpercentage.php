<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 3/9/2021
 * Time: 6:56 AM
 */

namespace App\Models;


use CodeIgniter\Model;

class loanpercentage extends Model
{
    protected $table ="loanpercentage";
    protected $primaryKey="id";
    protected $allowedFields=[
        'id',
        'loanpercentage',
    ];

}