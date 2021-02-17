<?php
/**
 * Created by PhpStorm.
 * User: DragonGlass
 * Date: 2/14/2021
 * Time: 3:06 AM
 */
function display_error($validation,$field)
{
    if (isset($validation))
    {
        if ($validation->hasError($field))
        {
            return $validation->getError($field);
        }
    }
    else
    {
        return false;
    }
}