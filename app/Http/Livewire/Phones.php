<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Phones extends Component
{
    public $users, $name, $phone, $user_id;
    public $updateMode = false;

    public function render()
    {
        $this->users = User::all();
        return view('livewire.phones');
    }

    private function resetInputFields(){
        $this->name = '';
        $this->phone = '';
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'phone' => 'required',
        ]);

        User::create($validatedDate);

        session()->flash('message', 'Users Created Successfully.');

        $this->resetInputFields();

    }

    public function edit($id)
    {
        $this->updateMode = true;
        $user = User::where('id',$id)->first();
        $this->user_id = $id;
        $this->name = $user->name;
        $this->phone = $user->phone;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();


    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'phone' => 'required',
            
        ]);

        if ($this->user_id) {
            $user = User::find($this->user_id);
            $user->update([
                'name' => $this->name,
                'phone' => $this->phone,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Users Updated Successfully.');
            $this->resetInputFields();

        }
    }

    public function delete($id)
    {
        if($id){
            User::where('id',$id)->delete();
            session()->flash('message', 'Users Deleted Successfully.');
        }
    }
}