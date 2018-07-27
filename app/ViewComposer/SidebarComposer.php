<?php

namespace App\ViewComposer;


use Illuminate\View\View;


class SidebarComposer
{
    public function compose(View $view)
    {
       $view->with('user', auth()->user());
    }
}