@extends("templates.main")
@section("title", "Menu List")
@section("content")
<a href="/newmenu" class="btn btn-primary">New menu</a>
<table class="table table-primary">
    <br>
    <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Description
            </th>
            <th>
                Quantity
            </th>
            <th>
                Price
            </th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($menus as $menu)
        <tr>
            <td>
                {{ $menu->name }}
            </td>
            <td>
                {{ $menu->description }}
            </td>
            <td>
                {{ $menu->quantity }}
            </td>
            <td>
                {{ $menu->price }}
            </td>
            
            <td>
                {{ Form::open(["url" => "/menus", "method" => "delete"]) }}
                    <input type="hidden" name="id" value="{{ $menu->id }}">
                    <a href="{{ '/editmenus/' . $menu->id }}" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-primary">Delete</button>
                {{ Form::close() }}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop