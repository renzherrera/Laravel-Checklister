@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="row">
             <div class="col-md-12">
                    <div class="card">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('admin.checklist_groups.checklists.update',[$checklistGroup,$checklist])}} " method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit Checklist')}}</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">{{__('Name')}}</label>
                                    <input value="{{$checklist->name}}" class="form-control" name="name" type="text" placeholder="{{__('Enter Checklist name')}}">
                                </div> 
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-sm btn-primary" type="submit"> Save Checklist</button>
                            </div>
                        </form>

                     
                    </div>
                    <form action="{{route('admin.checklist_groups.checklists.destroy',[$checklistGroup,$checklist])}} " method="POST">
                        @csrf
                        @method('DELETE')
                    <button onclick="return confirm('{{__('Are you sure you want to delete this checklist?')}}')" class="btn btn-sm btn-danger" type="submit"> Delete This Checklist</button>
                    </form>

                    <hr/>

                    <div class="card">
                        <div class="card-header"><i class="fa fa-align-justify"></i>{{__('List of Tasks')}}</div>
                        <div class="card-body">
                                @livewire('tasks-table', ['checklist' => $checklist])
                        
                        </div>
                        </div>


                    @if ($errors->storetask->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->storetask->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header"> {{__('New Task')}}</div>
                <form action="{{route('admin.checklists.tasks.store',[$checklist])}} " method="POST">
                @csrf
                @method('POST')
                <div class="card-body">

                        <div class="form-group">
                            <label for="name">{{__('Task Name')}}</label>
                            <input  value="{{old('name')}}" class="form-control" name="name" type="text">
                        </div> 
                        <div class="form-group">
                            <label for="description">{{__('Description')}}</label>
                            <textarea class="form-control" name="description" rows="5">{{old('description')}}</textarea>
                        </div> 
                </div>
                <div class="card-footer">
                    <button class="btn btn-sm btn-primary" type="submit"> Save Task</button>

                </div>
                </form>
            </div>
             
            </div>
          


            </div>
        </div>
    </div>
</div>

@endsection
