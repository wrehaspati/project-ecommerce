<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $loop_count;

    public $image;

    public $item_id;

    public $image_preview;

    public function updatedImage()
    {
        $this->validate([
            'image_preview' => 'image|max:1024',
        ]);
    }
    
    public function refresh()
    {
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
