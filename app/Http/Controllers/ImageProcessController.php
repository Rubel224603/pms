<?php

namespace App\Http\Controllers;

use App\Models\ImageProcess;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageProcessController extends Controller
{
    //
    public function createImageProcessing(){
        return view('admin.image.create');
    }

    public function storeImageProcessing(Request $request){
        $request->validate( [
            'image' => 'required'
        ]);
        //return $request;
        if($request->file('image')){
            $image     = $request->image;
            $fileName  = time().'.'.$image->getClientOriginalExtension();
            $directory = "uploads/Process-image/";
            $image->move($directory,$fileName);

            //$filePath = public_path('uploads/Process-image/');
            //dd($filePath);


//            if(!File::exists($filePath)){
//                File::makeDirectory($filePath,0755,true); //create folder if not available,permission for read/write & execute
//            }
            $img = Image::make(public_path($directory.$fileName));

            //$img = Image::make($image->path());
            $img->resize(300,300,function ($c){
              $c->aspectRatio();
            })->save($directory . $fileName);

        }

        $newImage = new ImageProcess();


        $newImage->image = $fileName;
        $newImage->save();
        return back()->with('message','Image Save SuccessFully');

    }

    public function listImageProcessing(){
        $processImages = ImageProcess::latest()->paginate(5);
        //  return $processImages;
        return view('admin.image.list' ,compact('processImages'));
    }
   public function editImageProcessing($id){
        $processImage = ImageProcess::find($id);
       // return $processImage;
        return view('admin.image.edit' ,compact('processImage'));
    }

    public function updateProcessImage(Request $request, $id){

        $updateProcessImage = ImageProcess::find($id);
        //return $request;
        //return $updateProcessImage;

        $request->validate([
            'image' => 'required'
        ]);


        if ($request->file('image')) {
            if ($updateProcessImage->image && file_exists('uploads/Process-image/' . $updateProcessImage->image)) {
                unlink('uploads/Process-image/' . $updateProcessImage->image);

            }

            $image     = $request->image;
            $fileName  = time() . '.' . $image->getClientOriginalExtension();
            $directory = "uploads/Process-image/";
            $image->move($directory, $fileName);

            // return public_path($directory.$fileName);

            $img = Image::make(public_path($directory . $fileName));


            $img->resize(300, 300, function ($c) {
                $c->aspectRatio();
            })->save($directory . $fileName);


            // $filePath   = public_path('uploads/Process-image/');
            //dd($filePath);

            //  if(!File::exists($filePath)){
            //    File::makeDirectory($filePath,0755,true); //create folder if not available,permission for read/write & execute
            //   }
            //  $img = Image::make($image->path());

            // $img->resize(300,300,function ($c){
            //     $c->aspectRatio();
            //  })->save($directory . $fileName);

            $updateProcessImage->image = $fileName;
            $updateProcessImage->save();
            return back()->with('message', 'Image update SuccessFully');

        }
    }




    public function deleteImageProcessing($id){
        $processImages = ImageProcess::find($id);
         $processImages->delete();
         return back()->with('message',"Process Image Delete Successfully");

    }


}
