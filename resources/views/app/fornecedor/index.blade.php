<h3>Lista de Fornecedores</h3>

Fornecedor: {{ $fornecedor[0]['nome']}}
<br>
Status: {{ $fornecedor[0]['status'] }}
<br>
@if (!($fornecedor[0]['status'] == 'S'))
    Fornecedor Inativo
@endif