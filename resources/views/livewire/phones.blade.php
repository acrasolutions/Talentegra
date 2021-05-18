<div>

     @if($updateMode)
        @include('livewire.phone_update')
    @else
        @include('livewire.phone_create')
    @endif 
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $value)
            <tr>
                
                <td>{{ $value->name }}</td>
                <td>{{ $value->phone }}</td>
                <td>
                <button wire:click="edit({{ Auth::user()->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
  
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   

