@extends("templates.main")
@section("title", "Edit Menu")
@section("content")
{{ Form::open(["url" => "/menus", "method" => "put"]) }}
    <input type="hidden" name="id" value="{{ $menu->id }}">
    <div>
        Name:
        <input type="text" 
               name="name" 
               class="form-control" 
               value="{{ $menu->name }}">
    </div>
    <div>
        Description:
        <input type="text" 
            name="description" 
            class="form-control" 
            value="{{ $menu->description }}">
    </div>
    <div>
        Quantity:
        <input type="text" 
                name="quantity" 
                class="form-control" 
                value="{{ $menu->quantity }}">
    </div>

    <div>
        Price:
        <input type="text" 
                name="price" 
                class="form-control" 
                value="{{ $menu->price }}">
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/listmenus" class="btn btn-primary">Go back</a>
    </div>
{{ Form::close() }}
@stop