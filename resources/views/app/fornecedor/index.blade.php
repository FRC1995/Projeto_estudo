<h3>Fornecedor</h3>

@php
    /*
    if() {

    } elseif() {

    }else{
        
    }
     */
@endphp


<!-- isset -->

@isset($fornecedores)

    @forelse ($fornecedores as $indice => $fornecedor) 

        Interação atual: {{ $loop->iteration }} <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status']}}
        <br>
        CNPJ {{ $fornecedor['CNPJ'] ?? ' ' }}
        <br>
        Telefone: ({{ $fornecedor['DDD'] ?? ''}}) {{ $fornecedor['telefone'] ?? ''}}
        <br>
        @if($loop->first)
            Primeira iteração do loop

            <br>
            Total de registros: {{ $loop->count }}
        @endif
        @if($loop->last)
            Ultima iteração do loop


        @endif
    <hr>
    @empty
        Não existem fornecedores cadastrados!!!
    @endforelse
@endisset
<br>
<br>


<!-- unless -->

Fornecedor: {{ $fornecedores[0]['nome']}}
<br>
Status: {{ $fornecedores[0]['status']}}
<br>
@if( !($fornecedores[0]['status'] == 'S') )
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
    Fornecedor inativo
@endunless