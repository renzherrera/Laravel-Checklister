<div>
    <table class="table table-responsive-lg table-striped" wire:sortable="updateTaskOrder">
                      
        <tbody>
            @foreach ($tasks as $task )
                
        <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
        <td>{{$task->name}}</td>
        <td style="text-align: right">
            <a class="btn btn-sm btn-primary" href="{{route('admin.checklists.tasks.edit',[$checklist,$task])}}">{{__('Edit')}}</a>
            <form style="display: inline-block" action="{{route('admin.checklists.tasks.destroy',[$checklist,$task])}} " method="POST">
                @csrf
                @method('DELETE')
            <button onclick="return confirm('{{__('Are you sure you want to delete this task?')}}')" class="btn btn-sm btn-danger" type="submit"> Delete</button>
            </form>
        </td>
        {{-- <td><span class="badge badge-success">Active</span></td> --}}
        </tr>
        @endforeach
        
        </tbody>
        </table>
</div>
