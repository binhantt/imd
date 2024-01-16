<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PageModels;
use App\Models\PageModels as AppPageModels;

class Page extends Controller
{
    public function index()
    {
        $data = [];
        $data["title"] = "shopsell";
        $data['template'] = 'Page/index';
        $data['pageModels'] = PageModels::where('status', 1)->orderBy('name', 'ASC')->get();
        $data['menuItems'] = $this->buildMenuTree($data['pageModels']);
        return view('page', $data);
    }
    private function buildMenuTree($pages, $parentId = null)
    {
        $menuItems = [];

        foreach ($pages as $page) {
            if ($page->parent_id == $parentId) {
                $menuItem = [
                    'id' => $page->id,
                    'name' => $page->name,
                    'url' => $page->url,
                    'children' => $this->buildMenuTree($pages, $page->id)
                ];

                $menuItems[] = $menuItem;
            } 
        }

        return $menuItems;
    }
    public function login()
    {
        // Cache::put('an', 'weqwewqeqweweqweqw', 60 * 10);
        // dd(Cache::get('an'));
        return view('login');
    }
}