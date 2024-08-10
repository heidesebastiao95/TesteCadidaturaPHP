<div>
    <div class="row @if($id === null) d-block @else d-none @endif">
        <!-- Seção de cadastro -->
        <div class="col-xl-12 bst-seller">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="heading mb-0">Cadastro</h4>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 bst-seller">
            <div class="card h-auto">
                <div class="card-body">
                    <!-- Formulário de cadastro/edição -->
                    <form wire:submit='salvar' >
                        <div class="row">
                            <div class="col-4 m-b30">
                                <label class="form-label required">Nome</label>
                                <input wire:model='nome' type="text" class="form-control" required>
                            </div>
                            <div class="col-4 m-b30">
                                <label class="form-label required">Whatsapp</label>
                                <input wire:model='whatsapp' type="text" class="form-control" required>
                            </div>
                            <div class="col-4 m-b30">
                                <label class="form-label required">Contato Alternativo</label>
                                <input wire:model='contatoAlternativo' type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 m-b30">
                                <label class="form-label required">CPF</label>
                                <input wire:model='cpf' type="text" class="form-control" required>
                            </div>
                            <div class="col-4 m-b30">
                                <label class="form-label required">CEP</label>
                                <input wire:model='cep' type="text" class="form-control" required>
                            </div>
                            <div class="col-4 m-b30">
                                <label class="form-label required">Onde nos achou</label>
                                <select wire:model='ondeNosAchou' class="form-control selectpicker" name="tipo" id="tipo" data-live-search="true" required>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Linkedin">Linkedin</option>
                                    <option value="Google">Google</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 m-b30">
                                <label class="form-label required">Descrição</label>
                                <input wire:model='descricao' type="text" class="form-control" required>
                            </div>
                            <div class="col-6 m-b30">
                                <label class="form-label required">Observação</label>
                                <input wire:model='obs' type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div id="button-container" class="col-sm-12">
                                <button id="btn-submit" class="btn btn-success btn-block" type="submit">Salvar</button>
                            </div>
                            <div id="edit-button-container" class="col-sm-9" style="display: none;">
                                <button id="btn-submit-edit" class="btn btn-primary btn-block" type="submit">Editar</button>
                            </div>
                            <div id="delete-button-container" class="col-sm-3" style="display: none;">
                                <button id="btn-delete" class="btn btn-danger btn-block" type="button">Excluir</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row @if($id === null) d-none @else d-block @endif">
        <!-- Seção de cadastro -->
        <div class="col-xl-12 bst-seller">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="heading mb-0">Editar</h4>
            </div>
        </div>
        <div class="col-xl-12 col-lg-12 bst-seller">
            <div class="card h-auto">
                <div class="card-body">
                    <!-- Formulário de cadastro/edição -->
                    <form wire:submit='atualizar' >
                        <div class="row">
                            <div class="col-4 m-b30">
                                <label class="form-label required">Nome</label>
                                <input wire:model='nome' type="text" class="form-control" required>
                            </div>
                            <div class="col-4 m-b30">
                                <label class="form-label required">Whatsapp</label>
                                <input wire:model='whatsapp' type="text" class="form-control" required>
                            </div>
                            <div class="col-4 m-b30">
                                <label class="form-label required">Contato Alternativo</label>
                                <input wire:model='contatoAlternativo' type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 m-b30">
                                <label class="form-label required">CPF</label>
                                <input wire:model='cpf' type="text" class="form-control" required>
                            </div>
                            <div class="col-4 m-b30">
                                <label class="form-label required">CEP</label>
                                <input wire:model='cep' type="text" class="form-control" required>
                            </div>
                            <div class="col-4 m-b30" wire:ignore>
                                <label class="form-label required">Onde nos achou</label>
                                <select wire:model='ondeNosAchou' class="form-control selectpicker"  data-live-search="true" required>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Linkedin">Linkedin</option>
                                    <option value="Google">Google</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 m-b30">
                                <label class="form-label required">Descrição</label>
                                <input wire:model='descricao' type="text" class="form-control" required>
                            </div>
                            <div class="col-6 m-b30">
                                <label class="form-label required">Observação</label>
                                <input wire:model='obs' type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 30px;">
                            <div id="edit-button-container" class="col-sm-9">
                                <button id="btn-submit-edit" class="btn btn-primary btn-block" type="submit">Editar</button>
                            </div>
                            <div  class="col-sm-3">
                                <button  class="btn btn-danger btn-block" type="button" wire:click="desativar({{ $id }})">Excluir</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>