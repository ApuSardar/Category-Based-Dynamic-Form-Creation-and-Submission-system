<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectContent;
use App\Models\WorkingProcess;
use App\Models\WorkingProcessContent;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project()
    {
        $working_process = WorkingProcess::first();
        $working_processs_contents = WorkingProcessContent::limit(3)->get();
        $project_contents = ProjectContent::limit(3)->get();
        $project = Project::first();
        return view('frontend.pages.project.index', compact('working_process', 'working_processs_contents','project', 'project_contents'));
    }
}
