<?php

namespace App\Livewire;

use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TaskIndex extends Component
{
    public $tasks;

    #[Rule('required')]
    public $name;

    public function mount()
    {
        $this->tasks= Task::with('user')->get();
    }
    public function save()
    {
        $this->validate();

       Task::create([
           'user_id'=>1,
           'name' => $this->name,
       ]);
        session()->flash('success', 'Task created successfully');
        $this->dispatch('task-updated');

       return redirect()->route('tasks');
    }
    public function render()
    {
        return view('livewire.task-index')
            ->title('Tasks - Hostinger')
            ->with([
                'button' => 'Create Task'
            ]);
    }
}
