@extends("admin.layout")

@section("content")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <div class="container-fluid">
        <h1>ADD PRODUCT FORM</h1>
        <form action="/addCategoryPost" method="post">
            @csrf
            <label for="">PRODUCT NAME</label>
            <input name="product_name" type="text" class="form-control">
              <label for="">PRODUCT PRICE</label>
            <input name="product_price" type="text" class="form-control">
            <label for="">PRODUCT DESCRIPTION</label>
            <input name="product_description" type="text" class="form-control">
            <label for="">PRODUCT QUANTITY</label>
            <input name="product_quantity" type="text" class="form-control">
            <label for="">PRODUCT IMAGE</label>
            <input name="product_image" type="file" class="form-control">


            <select class="form-control" name="" id="category">
                <option value="">select category</option>
                @foreach($category as $c)
                    <option value="{{$c->id}}">{{$c->category_name}}</option>
                @endforeach
            </select>

            <select class="form-control" name="" id="subcate">
                <option value="">selectsub category</option>
            </select>

            <button type="submit" class="btn btn-primary">add product</button>
        </form>
    </div>

<script>
    $(document).ready(function () {
        $('#category').change(function (e) { 
            e.preventDefault();
            var category = $(this).val();

            $.ajax({
                type: "POST",
                url: "/subCategoryAjax/",
                data: 
                "categoryID="+category+
                "&_token={{csrf_token()}}"
                ,
               
                success: function (response) {
                    $('#subcate').html(response);
                }
            });
            
        });
    });
</script>


@endsection