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
                        <form action="{{route('admin.checklist_groups.update',$checklistGroup)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">{{ __('Edit Groupname') }}</div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">{{__('Name')}}</label>
                                    <input value="{{$checklistGroup->name}}" class="form-control" name="name" type="text">
                                </div> 
                            </div>
                            <div class="card-footer">
                                <button class="btn btn-md btn-primary pr-5 pl-5" type="submit"> Save</button>
                            </div>
                        </form>
                       

                    </div>
                    <form action="{{route('admin.checklist_groups.destroy',$checklistGroup)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('{{__('Are you sure you want to delete this checklist group?')}}')" class="btn btn-xl btn-danger pr-5 pl-5" type="submit"> Delete</button>

                    </form> 
            </div>
        </div>
    </div>
</div>

@endsection
