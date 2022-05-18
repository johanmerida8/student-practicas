@extends("templates.main")
@section("title", "New Menu")
@section("content")
<form action="/menus" method="post">
    @csrf
    <div>
        Name:
        <input type="text" name="name" class="form-control">
    </div>
    <div>
        Description:
        <input type="text" name="description" class="form-control">
    </div>
    <div>
        Quantity:
        <input type="text" name="quantity" class="form-control">
    </div>
    <div>
        Price:
        <input type="text" name="price" class="form-control">
    </div>
    
    <div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/listmenus" class="btn btn-primary">Go back</a>
    </div>
</form>
@stop