<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Feature;
use App\Models\Project;
use App\Models\ProjectContent;
use App\Models\Service;
use App\Models\ServiceContent;
use App\Models\WebService;
use App\Models\WebServiceContent;
use App\Models\WorkingProcess;
use App\Models\WorkingProcessContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('login');
        $banner = Banner::first();
        $features = Feature::limit(4)->get();
        $service = Service::first();
        $service_contents = ServiceContent::get();
        $werbservice = WebService::first();
        $webservice_contents = WebServiceContent::get();
        $working_process = WorkingProcess::first();
        $working_processs_contents = WorkingProcessContent::limit(3)->get();
        $project_contents = ProjectContent::limit(3)->get();
        $project = Project::first();
        return view('frontend.index', compact('banner', 'features', 'service_contents', 'webservice_contents', 'werbservice', 'working_process', 'working_processs_contents', 'project', 'project_contents', 'service'));
    }
}
