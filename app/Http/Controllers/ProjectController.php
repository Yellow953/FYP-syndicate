<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller{
    public function __construct(){
        $this->middleware('admin');
    }

    public function DeleteProject($id){
        $project = Project::find($id)->delete();
        return redirect()->back(); 
    }

    public function EditProject($id){
        $project = Project::find($id);
        return view('admin.EditProject', compact('project'));
    }

    public function SaveProject(Request $request, $id){
        $project = Project::find($id);

        $project->name = $request->name;
        $project->description = $request->description;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $project->image = $filename;
        }
        
        $project->save();

        return redirect('/en/admin/projects');
    }

    public function NewProject(){
        return view('admin.NewProject');
    }

    public function SaveNewUser(Request $request){
        $project = new Project();

        $project->name = $request->name;
        $project->description = $request->description;

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('assets/images/uploads/'), $filename);
            $project->image = $filename;
        }
        
        $project->save();

        return redirect('/en/admin/projects');
    }
}
