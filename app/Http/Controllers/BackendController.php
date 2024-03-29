<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;

//Import all models...
use App\home;
use App\about_info;
use App\project;
use App\blog;
use App\contact_detail;
use App\expedu;
use App\skill;
use App\social_link;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('backend.index');
    }


    //Home Page Controllers..

    //Get Method
    public function home()
    {
        $data = home::all();
        return view('backend.home', ['info' => $data]);
    }

    //POST Method
    public function updateData(Request $req)
    {





        if ($req->hasFile('imageName')) {


            $image = $req->file('imageName');
            // $name = time();
            $name = "background1";
            $folder = 'uploads/';
            // $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $filePath = $folder . $name . '.png';
            $touch = Image::make($image);
            // $touch->fit(320, 320);
            $touch->save(public_path($filePath));

            $home = home::find($req->id);
            $home->title = $req->title;
            $home->name = $req->name;
            $home->image = $filePath;
            $home->description = $req->description;
            $home->save();
        } else {

            $home = home::find($req->id);
            $home->title = $req->title;
            $home->name = $req->name;
            $home->image  = $home->image;
            $home->description = $req->description;
            $home->save();
        }





        return redirect()->back();
    }

    //Profile page Controllers..

    //Get Method
    public function projects()
    {
        $data = project::all();
        return view('backend.projects', ['info' => $data]);
    }

    //POST Method...
    public function addProject(Request $req)
    {


        if ($req->hasFile('imageName')) {

            $project = new project();
            $image = $req->file('imageName');
            $name = time();
            $folder = 'uploads/projects/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $touch = Image::make($image);
            // $touch->fit(320, 320);
            $touch->save(public_path($filePath));

            $project->project_name = $req->projectName;
            $project->clint_name = $req->clintName;
            $project->languages = $req->languages;
            $project->preview_link = $req->previewLink;
            $project->image = $filePath;

            $project->save();
        }



        return redirect()->back();
    }

    //show project
    public function showProject($id)
    {
        $data = project::find($id);
        return view('backend.editProject', ['info' => $data]);
    }
    //Update project
    public function updateProject(Request $req)
    {
        $project =  project::find($req->id);

        $project->project_name = $req->projectName;
        $project->clint_name = $req->clintName;
        $project->languages = $req->languages;
        $project->preview_link = $req->previewLink;
        $project->image = $req->image;

        $project->save();

        return redirect('admin/projects');
    }

    //Delete Project
    public function deleteProject($id)
    {
        $project = project::find($id);
        $project->delete();

        return redirect('admin/projects');
    }


    //Blog Page Controller..

    //Get Method..
    public function blog()
    {
        $data = blog::all();
        return view('backend.blog', ['info' => $data]);
    }

    //POST Method..
    public function addBlog(Request $req)
    {
        $blog = new blog();
        if ($req->hasFile('imageName')) {


            $image = $req->file('imageName');
            $name = time();
            $folder = 'uploads/blog/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $touch = Image::make($image);
            // $touch->fit(320, 320);
            $touch->save(public_path($filePath));

            $blog->title = $req->title;
            $blog->post_by = $req->postBy;
            $blog->description = $req->description;
            $blog->post_date = $req->postDate;
            $blog->image = $filePath;

            $blog->save();
        }


        return redirect()->back();
    }
    //Show Method...
    public function showData($id)
    {
        $data = blog::find($id);
        return view('backend.editBlog', ['info' => $data]);
    }
    //Update Method..
    public function updateBlog(Request $req)
    {
        $blog = new blog();

        if ($req->hasFile('imageName')) {


            $image = $req->file('imageName');
            $name = time();
            $folder = 'uploads/blog/';
            $filePath = $folder . $name . '.' . $image->getClientOriginalExtension();
            $touch = Image::make($image);
            // $touch->fit(320, 320);
            $touch->save(public_path($filePath));


            $blog = blog::find($req->id);
            $blog->title = $req->title;
            $blog->post_by = $req->postBy;
            $blog->description = $req->description;
            $blog->post_date = $req->postDate;
            $blog->image = $filePath;

            $blog->save();
        } else {

            $blog = blog::find($req->id);
            $blog->title = $req->title;
            $blog->post_by = $req->postBy;
            $blog->description = $req->description;
            $blog->post_date = $req->postDate;
            $blog->image = $blog->image;

            $blog->save();
        }

        return redirect('admin/blog');
    }

    //Delete Blog
    public function deleteBlog($id)
    {
        $blog = blog::find($id);
        $blog->delete();

        return redirect('admin/blog');
    }

    //Contact page controller...

    //Get Method
    public function contactDetails()
    {
        $data = contact_detail::all();
        return view('backend.contact-details', ['info' => $data]);
    }

    //POST Method
    public function updateDetails(Request $req)
    {
        $contact = contact_detail::find($req->id);

        $contact->title = $req->title;
        $contact->description = $req->description;
        $contact->email = $req->email;
        $contact->phone = $req->phone;

        $contact->save();

        return redirect('admin/contact-details');
    }

    //Social link page Controller

    //Get Method
    public function socialLinks()
    {
        $data = social_link::all();
        return view('backend.social-media-links', ['info' => $data]);
    }

    //POST Method
    public function updateLink(Request $req)
    {
        $social = social_link::find($req->id);

        $social->link1 = $req->link1;
        $social->link2 = $req->link2;
        $social->link3 = $req->link3;
        $social->link4 = $req->link4;
        $social->save();

        return redirect('admin/social-links');
    }

    //About info page Controller ..

    //Get Method
    public function info()
    {
        $data = about_info::all();
        return view('backend.info', ['info' => $data]);
    }

    //POST Method...
    public function updateAboutInfo(Request $req)
    {
        $info = about_info::find($req->id);

        $info->first_name = $req->firstName;
        $info->last_name = $req->lastName;
        $info->age = $req->age;
        $info->address = $req->address;
        $info->phone = $req->phone;
        $info->email = $req->email;
        $info->nationality = $req->nationality;
        $info->skype = $req->skype;
        $info->language = $req->language;
        $info->freelance = $req->freelance;
        $info->save();

        return redirect('admin/info');
    }
    //Skill page Controller

    //Get Method
    public function skills()
    {
        $data = skill::all();
        return view('backend.skills', ['info' => $data]);
    }

    //POST Method 1
    public function skills_add(Request $request)
    {
        return $request->age;
    }

    //POST Method 2
    public function updateSKill(Request $req)
    {
        $skill = skill::find($req->id);

        $skill->html = $req->html;
        $skill->css = $req->css;
        $skill->js = $req->js;
        $skill->php = $req->php;
        $skill->laravel = $req->laravel;
        $skill->jquery1 = $req->jquery1;
        $skill->wp = $req->wp;
        $skill->bstrap = $req->bstrap;

        $skill->save();

        return redirect('admin/skill');
    }

    //Exp and Edu Page Controller

    //Get Method
    public function expedu()
    {
        $data = expedu::all();
        return view('backend.expedu', compact('data'));
    }

    //Post Method
    public function addexpedu(Request $req)
    {
        $expecu = new expedu();

        $expecu->date = $req->date;
        $expecu->title = $req->title;
        $expecu->expedu = $req->expedu;
        $expecu->description = $req->description;
        $expecu->expedu = $req->state;

        $expecu->save();

        return redirect('admin/expedu');
    }

    //Show expedu
    public function showExpedu($id)
    {
        $data = expedu::find($id);
        return view('backend.editExpedu', ['info' => $data]);
    }

    //Update Exp and Edu
    public function updateExpedu(Request $req)
    {
        $expecu = expedu::find($req->id);

        $expecu->date = $req->date;
        $expecu->title = $req->title;
        $expecu->expedu = $req->expedu;
        $expecu->description = $req->description;
        $expecu->expedu = $req->state;

        $expecu->save();

        return redirect('admin/expedu');
    }

    //Delete
    public function deleteExpedu($id)
    {
        $expedu = expedu::find($id);
        $expedu->delete();

        return redirect('admin/expedu');
    }



    //End...
}
