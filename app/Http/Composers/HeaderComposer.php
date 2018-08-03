<?php
/**
 * Created by PhpStorm.
 * User: ksym
 * Date: 28.07.18
 * Time: 14:45
 */

namespace App\Http\Composers;

use Illuminate\View\View;
use App\Models\Comments;

class HeaderComposer
{
    public function compose(View $view)
    {
        $cc=Comments::where('active','=',1)->count();
     $view->with('count_comments', $cc);
    }

}