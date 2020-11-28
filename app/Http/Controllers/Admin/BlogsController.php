<?php

namespace App\Http\Controllers\Admin;

use App\moving_tips_contents;
use App\Expats;
use App\moving_tips;
use App\Settings;
use Auth;
use App\User;
use App\Blogs;

use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Route;

class BlogsController extends MainAdminController
{
    public function __construct()
    {
        $this->middleware('auth');

        parent::__construct();

    }

    public function movingtipscontentlist()
    {
        $all = moving_tips_contents::orderBy('id')->get();

        return view('admin.pages.moving_tips_content',compact('all'));

    }

    public function movingtipscontentheading()
    {
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $heading = Settings::first();
        $heading = $heading->m_t_heading;

        return view('admin.pages.m_t_change_heading',compact('heading'));
    }

    public function SaveMovingTipsContentHeading(Request $request)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }


        $heading = Settings::where('id',1)->update(['m_t_heading' => $request->title]);

        \Session::flash('flash_message', __('text.Changes Saved'));

        return \Redirect::back();
    }

    public function addeditmovingtipscontent()
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        return view('admin.pages.addeditmovingtipscontent');
    }

    public function addnewmovingtipscontent(Request $request)
    {

        $data =  \Request::except(array('_token')) ;

        $inputs = $request->all();

        $rule=array(
            'title' => 'required',
            'image' => 'mimes:jpg,jpeg,gif,png'
        );

        $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        }

        if(!empty($inputs['id'])){

            $slide = moving_tips_contents::findOrFail($inputs['id']);

            //Slide image
            $slide_image = $request->file('image');

            if($slide_image){

                \File::delete(public_path() .'/upload/moving-tips/'.$slide->image);

                $filename = $_FILES['image']['name'];

                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $tmpFilePath = 'upload/moving-tips/';

                $hardPath =  Str::slug($inputs['title'], '-').'-'.md5(time()) .'.'.$ext;

                $img = Image::make($slide_image);

                $img->save($tmpFilePath.$hardPath);

                $slide->image = $hardPath;

            }

        }else{

            $slide = new moving_tips_contents;

            //Slide image
            $slide_image = $request->file('image');

            if($slide_image){

                \File::delete(public_path() .'/upload/moving-tips/'.$slide->image);

                $filename = $_FILES['image']['name'];

                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                $tmpFilePath = 'upload/moving-tips/';

                $hardPath =  Str::slug($inputs['title'], '-').'-'.md5(time()) .'.'.$ext;

                $img = Image::make($slide_image);

                $img->save($tmpFilePath.$hardPath);

                $slide->image = $hardPath;

            }
            else
            {
                $slide->image = '';
            }

        }


        $slide->title = $inputs['title'];
        $slide->url = $inputs['url'];


        $slide->save();

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', __('text.Changes Saved'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', __('text.Added'));

            return \Redirect::back();

        }


    }


    public function editmovingtipsContent($id)
    {
        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $slide = moving_tips_contents::findOrFail($id);

        return view('admin.pages.addeditmovingtipscontent',compact('slide'));

    }


    public function deletemovingtipscontent($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $slide = moving_tips_contents::findOrFail($id);

        \File::delete(public_path() .'/upload/moving-tips/'.$slide->image);

        $slide->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }

    public function blogslist()
    {
        if(Route::currentRouteName() == 'bewindvoering-admin')
        {
            $allblogs = Blogs::where('type',1)->orderBy('id', 'desc')->get();
        }
        elseif(Route::currentRouteName() == 'mentorschap-admin')
        {
            $allblogs = Blogs::where('type',2)->orderBy('id', 'desc')->get();
        }
        elseif(Route::currentRouteName() == 'curatele-admin')
        {
            $allblogs = Blogs::where('type',3)->orderBy('id', 'desc')->get();
        }
        else
        {
            $allblogs = Blogs::where('type',4)->orderBy('id', 'desc')->get();
        }

        return view('admin.pages.blogs',compact('allblogs'));
    }

    public function addeditblogs(){

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        return view('admin.pages.addeditblog');
    }

    public function addnew(Request $request)
    {

        $data =  \Request::except(array('_token')) ;

        $inputs = $request->all();


        $rule=array(
            'title' => 'required',
            'button_title' => 'required',
            'description' => 'required',
            'image' => 'mimes:jpg,jpeg,gif,png'
        );

        $validator = \Validator::make($data,$rule);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->messages());
        }


            if(!empty($inputs['id'])){

                $blog = Blogs::findOrFail($inputs['id']);

                //Slide image
                $t_user_image = $request->file('image');

                if($t_user_image){

                    \File::delete(public_path() .'/upload/blogs/'.$blog->image);

                    $tmpFilePath = 'upload/blogs/';

                    $filename = $_FILES['image']['name'];

                    $ext = pathinfo($filename, PATHINFO_EXTENSION);

                    $hardPath =  Str::slug($inputs['title'], '-').'-'.md5(time());

                    $image_file = $hardPath . '.' . $ext;

                    $target_file = $tmpFilePath . $image_file;

                    $img = Image::make($t_user_image);

                    $img->save($target_file);

                    $blog->image = $image_file;

                }


                $t_user_icon = $request->file('icon');

                if($t_user_icon){

                    \File::delete(public_path() .'/upload/blogs/icons/'.$blog->icon);

                    $tmpFilePath = 'upload/blogs/icons/';

                    $filename = $_FILES['icon']['name'];

                    $ext = pathinfo($filename, PATHINFO_EXTENSION);

                    $hardPath =  Str::slug($inputs['title'], '-').'-'.md5(time());

                    $image_file = $hardPath . '.' . $ext;

                    $target_file = $tmpFilePath . $image_file;

                    $img = Image::make($t_user_icon);

                    $img->save($target_file);

                    $blog->icon = $image_file;

                }


            }else{

                $blog = new Blogs;

                //Slide image
                $t_user_image = $request->file('image');

                if($t_user_image){

                    \File::delete(public_path() .'/upload/blogs/'.$blog->image);

                    $tmpFilePath = 'upload/blogs/';

                    $filename = $_FILES['image']['name'];

                    $ext = pathinfo($filename, PATHINFO_EXTENSION);

                    $hardPath =  Str::slug($inputs['title'], '-').'-'.md5(time());

                    $image_file = $hardPath . '.' . $ext;

                    $target_file = $tmpFilePath . $image_file;

                    $img = Image::make($t_user_image);

                    $img->save($target_file);

                    $blog->image = $image_file;

                }
                else
                {
                    $blog->image = '';
                }


                $t_user_icon = $request->file('icon');

                if($t_user_icon){

                    \File::delete(public_path() .'/upload/blogs/icons/'.$blog->icon);

                    $tmpFilePath = 'upload/blogs/icons/';

                    $filename = $_FILES['icon']['name'];

                    $ext = pathinfo($filename, PATHINFO_EXTENSION);

                    $hardPath =  Str::slug($inputs['title'], '-').'-'.md5(time());

                    $image_file = $hardPath . '.' . $ext;

                    $target_file = $tmpFilePath . $image_file;

                    $img = Image::make($t_user_icon);

                    $img->save($target_file);

                    $blog->icon = $image_file;

                }
                else
                {
                    $blog->icon = '';
                }


            }

        if($request->link)
        {
            if (strpos($request->link,'https://') === false && strpos($request->link,'http://') === false){
                $request->link = 'https://'.$request->link;
            }
        }

        $blog->title = $inputs['title'];
        $blog->button_title = $inputs['button_title'];
        $blog->description = $inputs['description'];
        $blog->type = $inputs['type'];
        $blog->link = $request->link;

        $blog->save();

        if(!empty($inputs['id'])){

            \Session::flash('flash_message', 'Changes Saved');

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', 'Added');

            return \Redirect::back();

        }


    }

    public function editblog($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $blog = Blogs::where('id',$id)->first();

        return view('admin.pages.addeditblog',compact('blog'));

    }

    public function delete($id)
    {

        if(Auth::User()->usertype!="Admin"){

            \Session::flash('flash_message', 'Access denied!');

            return redirect('admin/dashboard');

        }

        $blog = Blogs::findOrFail($id);

        \File::delete(public_path() .'/upload/blogs/'.$blog->image);
        \File::delete(public_path() .'/upload/blogs/icons/'.$blog->icon);

        $blog->delete();

        \Session::flash('flash_message', 'Deleted');

        return redirect()->back();

    }


}
