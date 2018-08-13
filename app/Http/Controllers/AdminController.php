<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Photo;
use App\Tag;
class AdminController extends Controller
{
    public function index(){
    	return view('admin.common.index');
    }
    public function add(){
    	return view('admin.common.addjob');
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
    	return view('admin.common.tagcreate');
    }

    public function tagstore(Request $request){
    	$this->validate($request, ['tag_name' => 'required']);
    	$save = new Tag;
    	$save->tag_name = $request->tag_name;
    	$save->save();
    	return back();
    }
}
