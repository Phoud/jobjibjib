<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Photo;
use App\Tag;
use Exception;
class AdminController extends Controller
{
    public function index(){
    	return view('admin.common.index');
    }
    public function add(){
    	$tags = Tag::all();
    	return view('admin.common.addjob', compact('tags'));
    }
    public function create(Request $request){
    	$this->validate($request, [
    		'job_name'=>'required',
    		'tag_id'=>'required',
    		'description'=>'required'

    	]);



    	$save = new Job;
    	$save->job_name = $request->job_name;
    	$save->tag_id = $request->tag_id;
    	$save->description = $request->description;
    	$save->save();
    	return back();
    }

    public function update(Request $request, $id){
    	$this->validate($request, [
    		'job_name'=>'required',
    		'tag_id'=>'required',
    		'description'=>'required'

    	]);



    	$save = Job::findOrFail($id);
    	$save->job_name = $request->job_name;
    	$save->tag_id = $request->tag_id;
    	$save->description = $request->description;
    	$save->save();
    	return back();
    }

    public static function uploadimage(Request $request){
        if($request->exists('files')){
            $image_name = md5(microtime()) . time() . 'content_stored' . '.png';
            move_uploaded_file($request->file('files')[0]->getRealPath(), public_path('img/medium/' . $image_name));
            
            $photo = new Photo;
            $photo->photo_url = $image_name;
            $photo->save();

            $data = json_decode(json_encode(
                [ 'url' => "/img/medium/$image_name"]
            ));

            return response()->json(
            [
                'success'=> true, 'files' => [ 0 => $data ]
            ]);
        }
        return response()->json(
        [
            'success'=> false
        ]);
    }

    public function deleteimage(Request $request){
    	$filename = $request->file;
    	$filename = str_replace('/img/medium/','', $filename);
    	$delete = Photo::where('photo_url',$filename)->first();
    	if(isset($delete)){
	    	unlink(public_path().$request->file);
	    	Photo::where('photo_url',$filename)->delete();
    	}
    	 return response()->json(
        [
            'file'=> $filename
        ]);
    }

    public function addtag(){
    	$tags = Tag::all();
    	return view('admin.common.tagcreate', compact('tags'));
    }

    public function tagstore(Request $request){
    	$this->validate($request, ['tag_name' => 'required']);
    	$save = new Tag;
    	$save->tag_name = $request->tag_name;
    	$save->save();
    	return back();
    }

    public function tag_edit($id){
    	$edits = Tag::findOrFail($id);
    	return view('admin.common.tagedit', compact('edits'));
    }
    public function tagedit(Request $request, $id){
    	$update = Tag::findOrFail($id);
    	$update->tag_name = $request->tag_name;
    	$update->save();
    	return redirect()->route('admin.addtag');
    }
    public function tagDelete($id){
    	$delete = Tag::findOrFail($id);
    	$delete->delete();
    	return redirect()->route('admin.addtag');
    }

    public function allJob(){
    	$jobs = Job::all();
    	return view('admin.common.alljob', compact('jobs'));
    }

    public function jobEdit($id){
    	$jobs = Job::findOrFail($id);
    	$tags = Tag::all();
    	return view('admin.common.jobedit', compact('jobs','tags'));
    }

    public function jobDelete(Request $request, $id){
    	$deletejob = Job::findOrFail($id);
		 
         
    	$regexFindImageTag='/<img [^>]*>/i';
        $matches=[];
        $imgs=[];
        $img=null;
        preg_match_all($regexFindImageTag, $deletejob->description, $matches);
        //libxml_use_internal_errors(true);
        $stringHtml = implode(' ', $matches[0]);
        if($stringHtml==="") return $imgs;
        $doc = new \DOMDocument();
        $doc->loadHTML($stringHtml);
        $imageTags = $doc->getElementsByTagName('img');
        foreach($imageTags as $tag) {
            $img=$tag->getAttribute('src');
            $img = explode('/', $img)[count(explode('/', $img))-1];
            $img = Photo::where('photo_url', $img)->first();
            if(isset($img)){
            	try {
            		unlink(public_path('/img/medium/').$img->photo_url);
		    		Photo::where('photo_url',$img->photo_url)->delete();
            	} catch (Exception $e) {
            		
            	}
	            
            }
                
        }

        $deletejob->delete();
        return back();
    	
    }
}
