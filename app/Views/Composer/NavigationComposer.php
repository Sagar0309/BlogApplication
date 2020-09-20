<?php
namespace App\Views\Composer;
use Illuminate\View\View;
use App\Category;
use App\Post;
class NavigationComposer
{
    public function compose(View $view){
        $this->composeCategories($view);
    }
    private function composeCategories(View $view){
        $categories=Category::all();

        $view->with('categories', $categories);
    }
}