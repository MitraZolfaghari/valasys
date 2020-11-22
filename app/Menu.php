<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'slug', 'name', 'parent_id', 'description', 'order', 'is_enable',
    ];

    public function parent()
    {
        return $this->belongsTo('App\Menu', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Menu', 'parent_id');
    }

    public function getItemsByParent($id = null, $except = null)
    {
        return $this->whereParentId($id)->whereKeynot($except)->get();
    }

    public function getTree($parentId = null, $except = null)
    {
        $categories = [];

        foreach($this->getItemsByParent($parentId, $except) as $category)
        {
            $categories[] = [
                'item' => $category,
                'children' => $this->getTree($category->id, $except)
            ];
        }

        return $categories;
    }

    public function toSelect($arr, $depth = 0, $selected = null) {
        $html = '';
        foreach ( $arr as $v ) {
            $html.= '<option value="'.$v['item']['id'].'" '.($selected == $v['item']['id'] ? 'selected': '').'>' . str_repeat("--", $depth) .' '. $v['item']['name'] . '</option>' . PHP_EOL;
            if ( array_key_exists('children', $v) && !empty($v['children'])) {
                $html.= $this->toSelect($v['children'], $depth+1, $selected);
            }
        }

        return $html;
    }
}
