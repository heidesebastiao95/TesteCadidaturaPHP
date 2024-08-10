<?php

namespace App\Livewire\Components;

use App\Models\Atendimento;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CriarAtendimento extends Component
{
    #[Validate('required|string')]
    public string $nome;

    #[Validate('required|string')]
    public string $whatsapp;

    #[Validate('required|string')]
    public string $contatoAlternativo;

    #[Validate('required|string')]
    public string $cpf;

    #[Validate('required|string')]
    public string $cep;

    #[Validate('required|string')]
    public string $ondeNosAchou = "Facebook";

    #[Validate('required|string')]
    public string $descricao;

    #[Validate('required|string')]
    public string $obs;

    public string | null $id = null;

    public function salvar(): void
    {
        $this->validate();

        $atendimentoParaSalvar = new Atendimento();
        $atendimentoParaSalvar->nome_cliente = $this->nome;
        $atendimentoParaSalvar->whatsapp = $this->whatsapp;
        $atendimentoParaSalvar->contacto2 = $this->contatoAlternativo;
        $atendimentoParaSalvar->cpf = $this->cpf;
        $atendimentoParaSalvar->cep = $this->cep;
        $atendimentoParaSalvar->como_nos_conheceu = $this->ondeNosAchou;
        $atendimentoParaSalvar->descricao = $this->descricao;
        $atendimentoParaSalvar->obs = $this->obs;

        $atendimentoParaSalvar->save();
        $this->redirect('/');
    }

    public function atualizar(): void
    {
        $this->validate();

        $atendimentoParaAtualizar = Atendimento::query()->findOrFail($this->id);
        $atendimentoParaAtualizar->nome_cliente = $this->nome;
        $atendimentoParaAtualizar->whatsapp = $this->whatsapp;
        $atendimentoParaAtualizar->contacto2 = $this->contatoAlternativo;
        $atendimentoParaAtualizar->cpf = $this->cpf;
        $atendimentoParaAtualizar->cep = $this->cep;
        $atendimentoParaAtualizar->como_nos_conheceu = $this->ondeNosAchou;
        $atendimentoParaAtualizar->descricao = $this->descricao;
        $atendimentoParaAtualizar->obs = $this->obs;

        $atendimentoParaAtualizar->save();
        $this->redirect('/');
    }

    public function desativar(string $idAtendimento): void
    {
        $atendimentoParaDesativar = Atendimento::query()->findOrFail($idAtendimento);
        $atendimentoParaDesativar->ativado = false;
        $atendimentoParaDesativar->save();
        $this->redirect('/');
    }


    // Ouve evento disparado quando um checkbox é clicado (Evento disparado em livewire/components/listar-atendimentos)
    #[On('selectItem')]
    public function selectAtendimento(string $idAtendimento): void
    {
        if($idAtendimento === $this->id) {

            $this->id = null;
            $this->nome = "";
            $this->whatsapp = "";
            $this->contatoAlternativo = "";
            $this->cpf = "";
            $this->cep = "";
            $this->ondeNosAchou = "Facebook";
            $this->descricao = "";
            $this->obs = "";

        } else {

            $this->id = $idAtendimento;
            $atendimentoParaAtualizar = Atendimento::query()->findOrFail($idAtendimento);
            $this->nome = $atendimentoParaAtualizar->nome_cliente;
            $this->whatsapp = $atendimentoParaAtualizar->whatsapp;
            $this->contatoAlternativo = $atendimentoParaAtualizar->contacto2;
            $this->cpf = $atendimentoParaAtualizar->cpf;
            $this->cep = $atendimentoParaAtualizar->cep;
            $this->ondeNosAchou = $atendimentoParaAtualizar->como_nos_conheceu;
            $this->descricao = $atendimentoParaAtualizar->descricao;
            $this->obs = $atendimentoParaAtualizar->obs;
        }
    }

    public function render()
    {
        return view('livewire.components.criar-atendimento');
    }
}
