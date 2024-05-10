<?php

namespace App\Helpers;

class Helper
{
    public const DELETE_BUTTON = 'delete';
    public const EDIT_BUTTON = 'edit';

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

    public static function renderAction($module, $id, $userId = null, array $actions = [self::EDIT_BUTTON, self::DELETE_BUTTON])
    {

        if(auth()->guard('admin') || ($userId != null && auth()->guard('admin')->user()->id == $userId)) {
            $deleteButton = '<button id="btn-delete-resource" class="btn btn-sm btn-danger"
                data-toggle="modal" data-target="#confirmDelete"
                data-id="'.$id.'" data-url="'.route('admin.'.$module.'.destroy', $id).'">
                <i class="c-icon c-icon-sm cil-trash"></i>
                </button>';
            $editButton = '<a style="margin-left:5px" class="btn btn-sm btn-info" href="'.route('admin.'.$module.'.edit', $id).'">
                <i class="c-icon c-icon-sm cil-pencil"></i>
                </a>';

            $actionButton = '';
            foreach ($actions as $action) {
                if ($action == self::EDIT_BUTTON) $actionButton.=$editButton;
                if ($action == self::DELETE_BUTTON) $actionButton.=$deleteButton;
            }

            return '<div class="d-flex text-center">' . $actionButton . '</div>';
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
                <a style="margin-left:5px" class="btn btn-sm btn-success" href="'.route('admin.'.$module.'.purchased', $id).'">
                <i class="c-icon c-icon-sm cil-check"></i>
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
