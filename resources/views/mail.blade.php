@extends('layouts.eskIndex')


@section('titulo')
    mail
@endsection

@section('contenido')
<div class="container text-center">
    <form action="{{ route('contactanos.store') }}" method="post">
        @csrf

        <div class="from-group ">
            <label for="titulo">Titulo:</label>
            <input type=" text" class="form-control mx-auto" style="width: 500px" name="titulo" value="{{old('titulo')}}">
        </div>
        <div class="from-group">
            <label for="mensaje">Sugerencia:</label><br>
            <textarea name="mensaje"  id="" cols="60" rows="10" value="{{old('mensaje')}}"></textarea>
        </div>
        <button type="submit" class=" btn btn-primary mb-2">Añadir</button>
      
    </form>
    
    @if (session('info'))
        <script>
            alert("{{session('info')}}");
        </script>
    @endif
</div>
@endsection
