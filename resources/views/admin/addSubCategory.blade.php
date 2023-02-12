@extends("admin.layout")

@section("content")
    <div class="container-fluid">
        <h1>ADD SUB CATEGORY FORM</h1>
        <form action="/addSubCategoryPost" method="post">
            @csrf
            <label for="">Add Category</label>
            <input name="sub_category_name" type="text" class="form-control">
            <label for="">category</label>
            <select class="form-control" name="category" id="">
                <option value="">selectcategory</option>

                @foreach($category as $c)
                    <option value="{{$c->id}}">{{$c->category_name}}</option>
                @endforeach

            </select>
            <button type="submit" class="btn btn-primary">add sub category</button>
        </form>
    </div>
@endsection