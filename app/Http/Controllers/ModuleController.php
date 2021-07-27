<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result["items"] = Module::orderby("order","ASC")->get();

        return view("moduleList",["result" => $result]);
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
        $result["item"] = Module::where("id",$id)->first();

        return view("moduleDetail",["result" => $result]);
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
        $arr = $request->all();
        $arr["order"] = 0;
        if(@$arr["active"]=="on") $arr["active"] = 1; else $arr["active"] = 0;
        if(@$arr["type"]==null) $arr["type"] = "";
        if(@$arr["category"]==null) $arr["category"] = "";
        if(@$arr["name"]==null) $arr["name"] = "";
        if(@$arr["title"]==null) $arr["title"] = "";
        if(@$arr["content"]==null) $arr["content"] = "";
        if(@$arr["icon"]==null) $arr["icon"] = "";
        if(@$arr["imageurl"]==null) $arr["imageurl"] = "";

        $result = Module::find($id)->update($arr);

        $results["items"] = Module::orderby("order","ASC")->get();

        $panelMenu = Module::where("active",1)->orderby("order","ASC")->get();
        session(["panelMenu"=>$panelMenu]);

        return view("moduleList",["result" => $results]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Module::destroy([$id]);

        $results["items"] = Module::orderby("order","ASC")->get();

        $panelMenu = Module::where("active",1)->orderby("order","ASC")->get();
        session(["panelMenu"=>$panelMenu]);

        return view("moduleList",["result" => $results]);
    }


    public function order(Request $request) {
        $result = json_decode($request->list_order,true);
        foreach($result as $key => $value) {
            if(isset($value["id"])) {
                Module::find((int)$value["id"])->update(array("order"=>$key));
            }
        }

        $panelMenu = Module::where("active",1)->orderby("order","ASC")->get();
        session(["panelMenu"=>$panelMenu]);

        return $request->list_order;
    }
}