<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Project;
use App\Models\Services;
use Illuminate\Support\Str;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service=Services::orderBy('id','DESC')->paginate();
        return view('backend.service.index')->with('services',$service);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_skill'=>'string|required',
            'level'=>'string|required',
            'photo'=>'string'
            
            // 'photo'=>'string|nullable'
        ]);
        $data=$request->all();
        // $slug=Str::slug($request->title);
        // $count=Project::where('slug',$slug)->count();
        // if($count>0){
        //     $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        // }
        // $data['slug']=$slug;
        // return $data;
        $status=Services::create($data);
        if($status){
            request()->session()->flash('success','Project successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Services::find($id);
        if(!$service){
            request()->session()->flash('error','Service Programming not found');
        }
        return view('backend.service.edit')->with('service',$service);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service=Services::find($id);
        $this->validate($request,[
            'nama_skill'=>'string|required',
            'level'=>'string|required',
            'photo'=>'string'
            
            // 'photo'=>'string|nullable'
        ]);
        $data=$request->all();

        $status=$service->fill($data)->save();
        if($status){
            request()->session()->flash('success','Service Programming successfully updated');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service=Services::find($id);
        if($service){
            $status=$service->delete();
            if($status){
                request()->session()->flash('success','Service Programming successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('service.index');
        }
        else{
            request()->session()->flash('error','Service Programming not found');
            return redirect()->back();
        }
    }
}
