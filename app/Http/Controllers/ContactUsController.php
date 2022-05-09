<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactusModel;
use DB;
class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('frontend.contactus');
    }

    public function contactus_save(Request $request)
    {


        $new = new contactusModel();
        $new->first_name = $request->first_name;
        $new->last_name = $request->last_name;
        $new->email = $request->email;
        $new->phone = $request->phone;        
        $new->subject = $request->subject;
        $new->description = $request->message;
        $new->save();
        

        $filesu = [];
        foreach($request->files as $file){
            foreach($file as $index => $f){
               $oldfilename =  $f->getClientOriginalName();
               array_push($filesu, $oldfilename);
                $request->file('files')[$index]->storeAs(
                'attachments',
                $oldfilename . "." . $f->getClientOriginalExtension(),
                'public' );    
            }
        }

        $new->attachments = serialize('attachments/'.$filesu);
        $new->save();

        toast('Your Message Reveiced Us','success');
        return back();
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
