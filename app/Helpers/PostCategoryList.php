<?php


namespace App\Helpers;

use Illuminate\Support\Str;

class Helper
{
    public static function PostCategory($PostCategories, $parent_id = 0, $char = '')
    {
        $html = '';

        foreach ($PostCategories as $key => $PostCategory) {
            if ($PostCategory->parent_id == $parent_id) {
                $html .= '
                    <tr>
                        <td ww>' . $PostCategory->id . '</td>
                        <td>' . $char . $PostCategory->name . '</td>
                        <td>' . self::active($PostCategory->active) . '</td>
                        <td>' . $PostCategory->updated_at . '</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal">
                                    <a class="btn btn-primary btn-sm" href="/admin/PostCategories/edit/' . $PostCategory->id . '">
                                       <i class="icofont-edit text-success"></i>
                                    </a>
                                </button>
                            
                                <button type="button" class="btn btn-outline-secondary deleterow">
                                    <a href="#" onclick="removeRow(' . $PostCategory->id . ', \'/admin/PostCategories/destroy\')">
                                        <i class="icofont-ui-delete text-danger"></i>
                                    </a>
                                </button>
                            </div>
                        </td>
                    </tr>
                ';

                unset($PostCategories[$key]);

                $html .= self::menu($PostCategories, $PostCategory->id, $char . '|--');
            }
        }

        return $html;
    }

    public static function active($active = 0): string {
        return $active == 0 ? '<span class="badge bg-danger">NO</span>'
            : '<span class="badge bg-success">YES</span>';
    }

    public static function PostCategories($PostCategories, $parent_id = 0) :string
    {
        $html = '';
        foreach ($PostCategories as $key => $PostCategory) {
            if ($PostCategory->parent_id == $parent_id) {
                $html .= '
                    <li class="menu-item menu-item-has-children"> 
                        <a href="/danh-muc/' . $PostCategory->id . '-' . Str::slug($PostCategory->name, '-') . '.html">
                            ' . $PostCategory->name . '
                        </a>';

                unset($menus[$key]);

                if (self::isChild($PostCategories, $PostCategory->id)) {
                    $html .= '<ul class="sub-menu">';
                    $html .= self::menus($PostCategories, $PostCategory->id);
                    $html .= '</ul>';
                }

                $html .= '</li>';
            }
        }

        return $html;
    }

    // public static function price($price = 0, $priceSale = 0)
    // {
    //     if ($priceSale != 0) return number_format($priceSale);
    //     if ($price != 0)  return number_format($price);
    //     return '<a href="/lien-he.html">Liên Hệ</a>';
    // }
}
