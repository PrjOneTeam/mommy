<?php

namespace App\Helpers;

class Helper
{

    public static function get_content($file) {
        return file_get_contents($file);
    }
    public static function decodeFlag() {
        $flag = session()->get('language');
        if($flag) return $flag;
        return 'vn';
    }

    public static function allow($userId = null) {
        if(auth()->guard('admin')->user()->role == 1 || ($userId != null && auth()->guard('admin')->user()->id == $userId)) {
            return true;
        } else {
            return false;
        }
    }

    public static function renderAction($module, $id, $userId = null) {
        if(auth()->guard('admin') || ($userId != null && auth()->guard('admin')->user()->id == $userId)) {
            return '<div class="d-flex text-center">
                <button id="btn-delete-resource" class="btn btn-sm btn-danger"
                data-toggle="modal" data-target="#confirmDelete"
                data-id="'.$id.'" data-url="'.route('admin.'.$module.'.destroy', $id).'">
                <i class="c-icon c-icon-sm cil-trash"></i>
                </button>
                <a style="margin-left:5px" class="btn btn-sm btn-info" href="'.route('admin.'.$module.'.edit', $id).'">
                <i class="c-icon c-icon-sm cil-pencil"></i>
                </a>
                </div>';
        } else {
            return '<div class="d-flex text-center">
            <button id="btn-delete-resource" disabled class="btn btn-sm btn-danger">
            <i class="c-icon c-icon-sm cil-trash"></i>
            </button>
            <button disabled style="margin-left:5px" class="btn btn-sm btn-info">
            <i class="c-icon c-icon-sm cil-pencil"></i>
            </button>
            </div>';
        }
    }

    public static function renderInfoAction($module, $id, $userId = null) {
        if(auth()->guard('admin') || ($userId != null && auth()->guard('admin')->user()->id == $userId)) {
            return '<div class="d-flex text-center">
                <button id="btn-delete-resource" class="btn btn-sm btn-danger"
                data-toggle="modal" data-target="#confirmDelete"
                data-id="'.$id.'" data-url="'.route('admin.'.$module.'.destroy', $id).'">
                <i class="c-icon c-icon-sm cil-trash"></i>
                </button>
                <a style="margin-left:5px" class="btn btn-sm btn-info" href="'.route('admin.'.$module.'.edit', $id).'">
                <i class="c-icon c-icon-sm cil-description"></i>
                </a>
                </div>';
        } else {
            return '<div class="d-flex text-center">
            <button id="btn-delete-resource" disabled class="btn btn-sm btn-danger">
            <i class="c-icon c-icon-sm cil-trash"></i>
            </button>
            <button disabled style="margin-left:5px" class="btn btn-sm btn-info">
            <i class="c-icon c-icon-sm cil-pencil"></i>
            </button>
            </div>';
        }
    }

    public static function setCookie($name, $value){
        return session()->put($name, $value);
    }

    public static function getCookie($name){
        return session()->get($name);
    }
}
