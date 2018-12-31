<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;


class CompanyController extends Controller
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
        $emp = new company();

        $emp->Position_title = $request->get('first_name');
        $emp->Job_nature = $request->get('nature');
        $emp->Currency = $request->get('Currency');
        $emp->Payment = $request->get('mobile');
        $emp->Email = $request->get('email');
        $emp->Location = $request->get('location');
        $emp->Kode_pos = $request->get('kodepos');
        $emp->Description = $request->get('kodepos');

        $emp->save();

        return view('company')->with('status', 'sukses');
    }

    public function companyAdd(Request $request){
        $emp = new company();
        $emp->Position_title = $request->first_name;
        $emp->Job_nature = $request->nature;
        $emp->Currency = $request->Currency;
        $emp->Payment = $request->payment;
        $emp->Email = $request->email;
        $emp->Location = $request->location;
        $emp->Kode_pos = $request->kodepos;
        $emp->Description = $request->description;
        $emp->save();

        return redirect("/")->with('status', 'sukses');
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
