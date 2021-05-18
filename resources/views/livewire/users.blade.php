<div>
    @if($updateMode)
        @include('livewire.update')
    @else
        @include('livewire.create')
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>
                <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  update speciality
</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Speciality</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST"id="user_form" enctype="multipart/form-data" method="post" action="{{ route('teacher.TeacherBasicDetails_add') }}">
            @csrf
            @include('flash-message')
      <div class="modal-body">
      <div class="mt-4">
                <x-label for="name" :value="__('Speciality, Strength or Current role')" />
                <x-input id="name" class="block mt-1 w-full" type="text"  name="speciality_strength"  required autofocus />
            </div>
            <x-button class="ml-4" class="traef">
                    {{ __('Submit') }}
                </x-button>
      </div>
      </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>