<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChecklistGroupRequest;
use App\Models\ChecklistGroup;

class ChecklistGroupController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.checklist_groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreChecklistGroupRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChecklistGroupRequest $request)

    {
        ChecklistGroup::create($request->validated());

        return redirect()->route('admin.checklist_groups.create');
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  ChecklistGroup $checklistGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ChecklistGroup $checklistGroup)
    {
        return view('admin.checklist_groups.edit',compact('checklistGroup'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  StoreChecklistGroupRequest $request
     * @param  ChecklistGroup $checklistGroup
     * @return \Illuminate\Http\Response
     */
    // WE USE STORECHECKLIST GROUPREQUEST BECAUSE THEY'RE IDENTICAL. WE CAN CREATE NEW REQUEST IF NEEDED.
    public function update(StoreChecklistGroupRequest $request, ChecklistGroup $checklistGroup)
    {
        $checklistGroup->update($request->validated());

        return redirect()->route('admin.checklist_groups.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistGroup $checklistGroup)
    {
        $checklistGroup->delete();
        return redirect()->route('home');   
    }
}
