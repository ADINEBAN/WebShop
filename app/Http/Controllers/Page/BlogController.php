<?php

namespace App\Http\Controllers\Page;
use App\Http\Service\Menu\MenuService;
use App\Http\Service\Product\ProductService;
class BlogController{
    protected $menuService;
    protected $productService;

    public function __construct(MenuService $menuService,ProductService $productService){
        $this->menuService = $menuService;
        $this->productService = $productService;

    }
    public function details(){

        return view('pages.blogDetails',[
            'title' => 'Blog Details',
            'menus' => $this->menuService->getParent()
        ]);
    }
}