<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class projectController extends Controller
{
    //
    public function viewAddNewProject(){
        return view('addProject');
    }
    
    public function addNewProject(Request $request){
        $incomingField = $request->validate([
            'title'=> ['required', 'string', 'max:60'],
            'description'=> ['required','string', 'max:300']
        ]);
    
        $incomingField['title'] = strip_tags($incomingField['title']);
        $incomingField['description'] = strip_tags($incomingField['description']);
        $incomingField['user_id'] = auth()->id();

        Project::create($incomingField);
    
       return redirect()->route('projects', ['success' => 'project created']);
    }
    public function allProject(){
        $projects = Project::get();

        return view('allproject',['projects'=>$projects]);

    }
    // public function viewSingleProject(Project $project){
    //     return view('view-single-project',['projects'=>$project[0]]);

    // }
    // // public function viewProjectById($id){
    

    // //       $projects= Project::where('id',$id)->get();

       
        
    // //   return view('view-single-project',['projects'=>$projects[0]]);

    // // }
    
    public function viewSingleproject(Project $project){
        return view('view-single-project',['project'=>$project]);

    }
    public function showEiditPage(Project $project){
     return view('project-edit',['project'=>$project]);
    }
    public function updateProject(Project $project, Request $request)
  {
    $incomingPost = $request->validate([
      'title' => ['required', 'string', 'max:60'],
      'description' => ['required']
    ]);
    $incomingPost['title'] = strip_tags($incomingPost['title']);
    $incomingPost['description'] = strip_tags($incomingPost['body']);

    $project->update($incomingPost);
    return back()->with('success', 'your post update successfully');

  }

}

