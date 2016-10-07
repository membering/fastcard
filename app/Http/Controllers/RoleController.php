<?php
/**
 * Created by PhpStorm.
 * User: thiennguyen
 * Date: 07/10/2016
 * Time: 13:50
 */

namespace App\Http\Controllers;


class RoleController extends Controller
{
    public function checkRole()
    {
        if (\Auth::check()) {
            $user = \Auth::user();
            if($user->is_admin == 1) {
                return Redirect(route('admin.index'));
            } else {
                return Redirect(route('supplier.index'));
            }
        } else {
            return Redirect(route('auth.login'));
        }
    }
}