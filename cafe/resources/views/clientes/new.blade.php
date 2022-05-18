@extends("templates.main")
@section("title", "New Cliente")
@section("content")
<form action="/clientes" method="post">
    @csrf
    <div>
        Firstname:
        <input type="text" name="firstname" class="form-control">
    </div>
    <div>
        Lastname:
        <input type="text" name="lastname" class="form-control">
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/listclientes" class="btn btn-primary">Go back</a>
    </div>
</form>
@stop