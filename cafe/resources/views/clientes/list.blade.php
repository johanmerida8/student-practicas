@extends("templates.main")
@section("title", "Cliente List")
@section("content")
<a href="/newcliente" class="btn btn-primary">New cliente</a>
<table class="table table-primary">
    <br>
    <thead>
        <tr>
            <th>
                Firstname
            </th>
            <th>
                Lastname
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>
                {{ $cliente->firstname }}
            </td>
            <td>
                {{ $cliente->lastname }}
            </td>
            <td>
                {{ Form::open(["url" => "/clientes", "method" => "delete"]) }}
                    <input type="hidden" name="id" value="{{ $cliente->id }}">
                    <a href="{{ '/editcliente/' . $cliente->id }}" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-primary">Delete</button>
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop