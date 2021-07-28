<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
//Import all models...
use App\home;
use App\project;
use App\blog;
use App\contact_detail;
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

    public function info()
    {
        return view('backend.info');
    }
    public function skills()
    {
        return view('backend.skills');
    }

    public function skills_add(Request $request)
    {
        return $request->age;
    }

    public function expedu()
    {
        return view('backend.expedu');
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
        $home = home::find($req->id);
        $home->title = $req->title;
        $home->name = $req->name;
        $home->description = $req->description;
        $home->image = $req->image;

        $home->save();

        return redirect('/home');
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
        $project = new project();

        $project->project_name = $req->projectName;
        $project->clint_name = $req->clintName;
        $project->languages = $req->languages;
        $project->preview_link = $req->previewLink;
        $project->image = $req->image;

        $project->save();

        return redirect('projects');
    }

    //Blog Page Controller..

    //Get Method..
    public function blog()
    {
        return view('backend.blog');
    }

    //POST Method..
    public function addBlog(Request $req)
    {
        $blog = new blog();

        $blog->title = $req->title;
        $blog->post_by = $req->postBy;
        $blog->description = $req->description;
        $blog->post_date = $req->postDate;
        $blog->image = $req->image;

        $blog->save();

        return redirect('blog');
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

        return redirect('contact-details');
    }

    //Social link page

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

        return redirect('social-links');
    }





    //End...
}
