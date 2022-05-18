@extends("templates.main")
@section("title", "Edit Cliente")
@section("content")
{{ Form::open(["url" => "/clientes", "method" => "put"]) }}
    <input type="hidden" name="id" value="{{ $cliente->id }}">
    <div>
        Fistname:
        <input type="text" 
               name="firstname" 
               class="form-control" 
               value="{{ $cliente->name }}">
    </div>
    <div>
        Lastname:
        <input type="text" 
               name="lasstname" 
               class="form-control" 
               value="{{ $cliente->name }}">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/listclientes" class="btn btn-primary">Go back</a>
    </div>
{{ Form::close() }}
@stop