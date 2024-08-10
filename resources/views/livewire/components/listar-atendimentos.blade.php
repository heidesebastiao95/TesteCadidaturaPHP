<div class="container-fluid" wire:ignore>
    <!-- Seção de visualização -->
    <div class="row">
        <div class="col-xl-12 bst-seller">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h4 class="heading mb-0">Visualização</h4>
            </div>
            <div class="card h-auto">
                <div class="card-body p-0">
                    <div class="table-responsive active-projects style-1 dt-filter exports">
                        <div class="tbl-caption"></div>
                        <table id="customer-tbl" class="table shorting">
                            <thead>
                                <tr>
                                    <th>Editar</th>
                                    <th>Nome</th>
                                    <th>Whatsapp</th>
                                    <th>contato-2</th>
                                    <th>CPF</th>
                                    <th>CEP</th>
                                    <th>Fonte</th>
                                    <th>Descrição</th>
                                    <th>Observações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($atendimentos as $atendimento)
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox">
                                                <input onclick="uncheckOthers(this)"  wire:click="selectAtendimento('{{ $atendimento->id }}')" type="checkbox" class="form-check-input user-checkbox" id="customCheckBox{{ $atendimento->id }}" data-resultado-id="{{ $atendimento->id }}">
                                                <label class="form-check-label" for="customCheckBox{{ $atendimento->id }}"></label>
                                            </div>
                                        </td>
                                        <td><span>{{ $atendimento->nome_cliente }}</span></td>
                                        <td><span>{{ $atendimento->whatsapp }}</span></td>
                                        <td><span>{{ $atendimento->contacto2 }}</span></td>
                                        <td><span>{{ $atendimento->cpf }}</span></td>
                                        <td><span>{{ $atendimento->cep }}</span></td>
                                        <td><span>{{ $atendimento->como_nos_conheceu }}</span></td>
                                        <td><span>{{ $atendimento->descricao }}</span></td>
                                        <td><span>{{ $atendimento->obs }}</span></td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>
<script>
    function uncheckOthers(checkbox) {
        var checkboxes = document.querySelectorAll('.user-checkbox');
        checkboxes.forEach(function(cb) {
            if (cb !== checkbox) {
                cb.checked = false;
            }
        });
    }
</script>