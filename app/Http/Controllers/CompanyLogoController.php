<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companylogomodel;
use DB;
class CompanyLogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function CompanyLogo()
    {
        $companylogo=DB::select('select * from companylogos order by id desc');
        return view('admin.companylogo' , [ 'companylogo' => $companylogo ]);
    }

    public function add_new_companylogo()
    {
        return view('admin.add_new_companylogo');
    }

    public function add_save_companylogo(Request $request)
    {
        if($request->hasFile('file')){
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $imgg=$image_name;
            $image->move(public_path('uploads'),$image_name);
        
            $image_path = "uploads/" . $image_name;
        }


        $new= new companylogomodel;
        $new->file=$imgg;
        $new->save();


        alert()->success("Saved Successfully");
        return redirect()->route('CompanyLogo');

    }
    public function add_new_companylogo_delete($id){
        companylogomodel::find($id)->delete();
        alert()->success("Deleted Successfully");
        return redirect()->route('CompanyLogo');


    }
    public function add_new_companylogo_edit($id)
    {
        $request=companylogomodel::find($id);
        return view('admin.add_new_companylogo_edit' , [ 'request' => $request ]);
        
    }

    public function add_new_companylogo_edit_save($id, Request $request)
    {
        if($request->hasFile('file')){
            $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $imgg=$image_name;
            $image->move(public_path('uploads'),$image_name);
        
            $image_path = "uploads/" . $image_name;
        }
        if($request->hasFile('file')){
  	      $image = $request->file('file');
            $image_name = $image->getClientOriginalName();
            $imgg=$image_name;
            $image->move(('uploads/'),time().'_'.$image_name);
        
            $image_path = "uploads/".time().'_'.$image_name;
        }
        $new=companylogomodel::find($id);
        $new->file=$imgg;
        $new->save();

        alert()->success("Updated Successfully");
        return redirect()->route('CompanyLogo');

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
