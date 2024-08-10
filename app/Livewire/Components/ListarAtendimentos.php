<?php

namespace App\Livewire\Components;

use App\Models\Atendimento;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class ListarAtendimentos extends Component
{
    public Collection $atendimentos;

    public function mount(): void
    {
        $this->atendimentos = Atendimento::query()->where('ativado',true)->get();
    }

    #[On('atualizar-list')]
    public function atualizarLista(): void
    {
        $this->atendimentos = Atendimento::query()->where('ativado',true)->get();
    }

    public function selectAtendimento(string $id): void
    {
        $this->dispatch('selectItem', idAtendimento : $id);
    }
    
    public function render(): View
    {
        return view('livewire.components.listar-atendimentos');
    }
}
