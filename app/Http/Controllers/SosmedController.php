<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\pendidikan;
use App\Models\Sosmed;
use Illuminate\Support\Str;
class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sosmed=Sosmed::orderBy('id','DESC')->paginate();
        return view('backend.sosmed.index')->with('sosmeds',$sosmed);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sosmed.create');
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
            'nama_sosmed'=>'string|required',
            'class_sosmed'=>'string|required',
            'url'=>'string|required',
            'photo'=>'string|nullable'

        ]);
        $data=$request->all();

        $status=Sosmed::create($data);
        if($status){
            request()->session()->flash('success','sosmed successfully created');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('sosmed.index');
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
        $sosmed=Sosmed::find($id);
        if(!$sosmed){
            request()->session()->flash('error','sosmed not found');
        }
        return view('backend.sosmed.edit')->with('sosmed',$sosmed);
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
        $sosmed=Sosmed::find($id);
        $this->validate($request,[
            'nama_sosmed'=>'string|required',
            'class_sosmed'=>'string|required',
            'url'=>'string|required',
            'photo'=>'string|nullable'
            // 'photo'=>'string|nullable'
        ]);
        $data=$request->all();

        $status=$sosmed->fill($data)->save();
        if($status){
            request()->session()->flash('success','sosmed successfully updated');
        }
        else{
            request()->session()->flash('error','Error, Please try again');
        }
        return redirect()->route('sosmed.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sosmed=Sosmed::find($id);
        if($sosmed){
            $status=$sosmed->delete();
            if($status){
                request()->session()->flash('success','sosmed successfully deleted');
            }
            else{
                request()->session()->flash('error','Error, Please try again');
            }
            return redirect()->route('sosmed.index');
        }
        else{
            request()->session()->flash('error','pekerjaan not found');
            return redirect()->back();
        }
    }
}
