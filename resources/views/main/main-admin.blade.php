
 @extends('templates.default', ['titulo' => "Menu", 'tag' => "HOME"])
 @section('titulo') <b>Menu</b> @endsection
 @section('conteudo')
 
     <div class='row'>
        {{-- <div class="col-sm-3" style="text-align: center">
            <a href="{{ route('cursos.index') }}">
                <img style="width: 128px; height: 128px" src="{{ asset('img/curso_ico.png') }}">
            </a>
            <h3>
                <b>Curso</b>
            </h3>
        </div>
        <div class="col-sm-3" style="text-align: center">
            <a href="{{ route('disciplinas.index') }}">
                <img style="width: 128px; height: 128px" src="{{ asset('img/disciplina_ico.png') }}">
            </a>
            <h3>
                <b>Disciplina</b>
            </h3>
        </div>
        <div class="col-sm-3" style="text-align: center">
            <a href="{{ route('professores.index') }}">
                <img style="width: 128px; height: 128px" src="{{ asset('img/professor_ico.png') }}">
            </a>
            <h3>
                <b>Professor</b>
            </h3>
        </div>
        <div class="col-sm-3" style="text-align: center">
            <a href="{{ route('alunos.index') }}">
                <img style="width: 128px; height: 128px" src="{{ asset('img/aluno_ico.png') }}">
            </a>
            <h3>
                <b>Aluno</b>
            </h3>
        </div>
        --}}
        <h1>O ADMINISTRADOR ESTÁ ONLINE</h1>
     </div>
     <br>
@endsection