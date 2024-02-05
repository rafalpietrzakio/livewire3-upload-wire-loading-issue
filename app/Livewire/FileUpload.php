<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $files = [];
    public $name = '';

    public function render()
    {
        return view('livewire.file-upload');
    }

    protected $rules = [
        'files.*' => 'mimes:jpg,jpeg,png,gif,svg,pdf,doc,docx,xls,xlsx,ppt,pptx,txt,zip,rar|max:2048', // 2MB Max
        'name' => 'required',
    ];

    public function updated($property) {
        $this->validateOnly($property);
    }

    public function submit() {
        $this->validate();

        foreach ($this->files as $file) {
            $file->store('files');
        }

        session()->flash('message', 'File uploaded successfully.');
    }
}
