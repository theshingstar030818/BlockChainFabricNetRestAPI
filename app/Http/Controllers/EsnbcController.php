<?php

namespace App\Http\Controllers;

use App\Esnbc;
use Illuminate\Http\Request;

class EsnbcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // print_r(Esnbc::all());exit;
        // return view('esnbcs.index')->with('esnbcs',Esnbc::first());
        $esnbcs = Esnbc::paginate(5);
        return view('esnbcs.index')->with('esnbcs',$esnbcs);
    }

    /**
     * Verify data from ajax call
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verifydata(Request $request)
    {
        $results = Esnbc::where('batches_info', $request->batches_info)->get();
        if (count($results) > 0) {
            return response()->json(['success' => true, 'error_msg' => 'Sorry, the Batches Info already exists.']);
        } 
    
        return response()->json(['success' => true, 'error_msg' =>'']);
    }

    /**
     * get batches_info list for ajax call
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function get_batches_info_lst(Request $request)
    {
        $results = Esnbc::where('batches_info', 'LIKE', $request->input('q', '').'%')
                            ->where('update_type','!=', 'Delete')
                            ->get(['batches_info as id', 'batches_info as text']);
        return ['results' => $results];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $esnbc = new Esnbc();

        return view('esnbcs.create')->with(compact('esnbc'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Esnbc::create($request->all());

        return redirect(route('esnbc-index'))->with('message','esnbc successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Esnbc  $esnbc
     * @return \Illuminate\Http\Response
     */
    public function show(Esnbc $esnbc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Esnbc  $esnbc
     * @return \Illuminate\Http\Response
     */
    public function edit(Esnbc $esnbc)
    {
        // print_r($esnbc);exit;
        return view('esnbcs.edit')->with(compact('esnbc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Esnbc  $esnbc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Esnbc $esnbc)
    {
        // print_r($esnbc);exit;
        $esnbc->update($request->all());
        return redirect(route('esnbc-index'))->with('message','esnbc successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Esnbc  $esnbc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Esnbc $esnbc)
    {
        // print_r($esnbc->update_type);exit();
        // $esnbc->delete();
        $esnbc->update_type = "Delete";
        $esnbc->save();

        return redirect(route('esnbc-index'))->with('message','esnbc successfully removed. But not updated to fabric net yet(status: pending).');
    }
}
