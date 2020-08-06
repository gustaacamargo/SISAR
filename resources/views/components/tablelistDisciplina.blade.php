<div class="table-responsive" style="overflow-x: visible; overflow-y: visible;">
    <table class='table table-striped' id="tabela">
        <thead>
            <tr style="text-align: center">
                @foreach ($header as $item)
                    <th>{{ $item }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr style="text-align: center">
                    <td style="display: none">{{ $item['id'] }}</td>
                    <td>{{ $item['nome'] }}</td>
                    <td>
                        <a nohref style="cursor: pointer" onclick="visualizar('{{ $item['id'] }}')"><img src="{{ asset('img/icons/info.svg') }}"></a>
                        <a nohref style="cursor: pointer" onclick="editar('{{ $item['id'] }}')"><img src="{{ asset('img/icons/edit.svg') }}"></a>
                        <a nohref style="cursor: pointer" onclick="peso('{{ $item['id'] }}','{{  $item['nome'] }}')"><img src="{{ asset('img/icons/peso.svg') }}"></a>
                        <a nohref style="cursor: pointer" onclick="conceito('{{ $item['id'] }}','{{  $item['nome'] }}')"><img src="{{ asset('img/icons/conceito.svg') }}"></a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

