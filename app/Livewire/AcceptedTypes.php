<?php

namespace App\Livewire;

use App\Enums\OrderStatusEnum;
use App\Models\User;
use Illuminate\Support\Str;
use Livewire\Component;

class AcceptedTypes extends Component
{
    public $fruits = ['apple', 'banana']; // Array // Instancia o array com valores iniciais

    public $name = 'John Doe'; // String

    public $age = 38; // Integer

    public $isActive = true; // Boolean

    public $filter = null; // Null

    public $enum = OrderStatusEnum::DONE; // Enum

    public $rawCollection; // Illuminate\Support\Collection

    public $eloquentCollection; // Illuminate\Database\Eloquent\Collection

    public $birthdate; // Carbon\Carbon || DateTime (Native PHP)

    public $text; // Stringable

    public function mount(): void
    {
        $this->fruits = ['orange', 'mango']; // sobrescreve em segundo plano

        $this->rawCollection = collect([]);
        $this->eloquentCollection = User::all();
        $this->birthdate = now(); // $this->birthdate = new \DateTime();
        $this->text = Str::title('text here'); // $this->text = str(''); // Para deixar como string Str::title('text here')->toString;
    }

    public function render()
    {
        $this->fruits = ['batata']; // sobrescreve de forma master antes da exibição

        return view('livewire.accepted-types');
    }
}
