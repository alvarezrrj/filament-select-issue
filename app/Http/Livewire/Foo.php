<?php

namespace App\Http\Livewire;

use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Livewire\Component;

class Foo extends Component implements HasForms
{
    use InteractsWithForms;

    public $baz;

    public function mount()
    {
        $this->form->fill();
    }

    public function getFormSchema(): array
    {
        return [
            Select::make('baz')
                ->options([
                    'a' => 1,
                    'b' => 2,
                    'c' => 3
                ])
                // uncomment following line to see the element turn bright
                // ->searchable()
            ];
    }
    public function render()
    {
        return view('livewire.foo');
    }
}
