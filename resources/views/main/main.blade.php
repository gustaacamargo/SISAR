
 @extends('templates.main', ['titulo' => "Menu", 'tag' => "HOME"])
 @section('titulo') <b>Menu</b> @endsection
 @section('conteudo')
 
     <div class='row'>
        <div class="col-sm-3" style="text-align: center">
            <a href="{{ route('prova') }}">
                <img style="width: 128px; height: 128px" src="{{ asset('img/prova_ico.png') }}">
            </a>
            <h3>
                <b>Avaliação</b>
            </h3>
        </div>
        <div class="col-sm-3" style="text-align: center">
            
        </div>
        <div class="col-sm-3" style="text-align: center">
            
        </div>
        <div class="col-sm-3" style="text-align: center">
            
        </div>
       
     </div>
     <br>
@endsection