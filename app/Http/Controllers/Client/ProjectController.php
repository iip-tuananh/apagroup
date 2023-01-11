<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\models\blog\Blog;
use App\models\Project;
use Illuminate\Http\Request;
use App\models\product\Product;
use App\models\blog\BlogCategory;

class ProjectController extends Controller
{
    public function detailProject($slug)
    {
        $data['blog_detail'] = Project::where(['slug' => $slug])->first();
 
        $data['blogs'] = Project::where(['status'=>1])
        ->orderBy('id','DESC')
        ->select(['id','images','description','created_at','slug'])
        ->paginate(12);
        $data['news'] = Project::where(['status'=>1])->orderBy('id', 'desc')->limit(10)->get(['id', 'name', 'slug', 'images']);
        $data['discountPro'] = Product::where('status', 1)->where('discount', '>', 0)->limit(5)->get(['id', 'name', 'price', 'discount', 'images', 'cate_slug', 'type_slug', 'slug']);
        return view('project.detail',$data);
    }
    public function listProject()
    {
        $data['list_blog'] = Project::where(['status'=>1])
        ->orderBy('id','DESC')
        ->paginate(6);
        $data['news'] = Blog::where(['status'=>1, 'home_status'=>1])->orderBy('id', 'desc')->limit(10)->get(['id', 'title', 'slug', 'image']);
        $data['title_page'] = 'Tất cả tin tức';
        $data['categoryBlog'] = BlogCategory::with([
            'listBlog' => function ($query){
                $query->where(['status'=>1])->paginate(10);
            }
        ])
        ->where('status',1)
        ->orderBy('id','asc')
        ->get(['id','name','slug','avatar']);
        return view('project.list',$data);
    }
}
