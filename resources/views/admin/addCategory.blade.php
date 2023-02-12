@extends("admin.layout")

@section("content")
    <div class="container-fluid">
        <h1>ADD CATEGORY FORM</h1>
        <form action="/addCategoryPost" method="post">
            @csrf
            <label for="">Add Category</label>
            <input name="category_name" type="text" class="form-control">
            <button type="submit" class="btn btn-primary">add category</button>
        </form>
    </div>
@endsection