<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpenPosition;

class OpenPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result["items"] = OpenPosition::orderby("order","ASC")->get();

        return view("openPositionList",["result" => $result]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $arr = $request->all();
        $arr["order"] = 0;
        if(@$arr["active"]=="on") $arr["active"] = 1; else $arr["active"] = 0;
        if(@$arr["category"]==null) $arr["category"] = "";
        if(@$arr["name"]==null) $arr["name"] = "";
        if(@$arr["content"]==null) $arr["content"] = "";
        if(@$arr["description"]==null) $arr["description"] = "";

        $result = OpenPosition::create($arr);
        
        $results["items"] = OpenPosition::orderby("order","ASC")->get();

        return view("openPositionList",["result" => $results]);
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
    public function show()
    {
        return view("openPositionDetail");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result["item"] = OpenPosition::where("id",$id)->first();
 
        return view("openPositionDetail",["result" => $result]);
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
        if(@$arr["category"]==null) $arr["category"] = "";
        if(@$arr["name"]==null) $arr["name"] = "";
        if(@$arr["content"]==null) $arr["content"] = "";
        if(@$arr["description"]==null) $arr["description"] = "";

        $result = OpenPosition::find($id)->update($arr);

        $results["items"] = OpenPosition::orderby("order","ASC")->get();

        return view("openPositionList",["result" => $results]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = OpenPosition::destroy([$id]);

        $results["items"] = OpenPosition::orderby("order","ASC")->get();

        return view("openPositionList",["result" => $results]);
    }

    public function order(Request $request) {
        $result = json_decode($request->list_order,true);
        foreach($result as $key => $value) {
            if(isset($value["id"])) {
                OpenPosition::find((int)$value["id"])->update(array("order"=>$key));
            }
        }
        return $request->list_order;
    }
}
