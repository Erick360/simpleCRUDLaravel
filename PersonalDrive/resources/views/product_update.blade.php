<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
         <!-- Latest compiled and minified CSS -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

         <!-- Optional theme -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 
         <!-- Latest compiled and minified JavaScript -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--
        <center>
            <h1>Update Page</h1>
            
            /{{$product->title}}
            {{$product->descriptionProduct}}
            <img src="/product/{{$product->image}}" alt="">
        </center>
    -->
    <center>
        <a class="btn btn-success" href="{{url('show_product')}}">Show Product</a>
        <br>

        <h1>Update Product</h1>
        <form action="{{url('/edit_product',$product->id)}}" method="Post" enctype="multipart/form-data">
            @csrf

            <div class="div_deg">
                <label for="">Product title</label>
                <input type="text" name="title" value="{{$product->title}}">
            </div>
            <div class="div_deg">
                <label for="">Product Description</label>
                <textarea name="descriptionProduct"  cols="30" rows="10" >{{$product->descriptionProduct}}</textarea>
            </div>
            <div class="div_deg">
                <label for="">Current Image</label>
                <img height="300" height="300" src="/product/{{$product->image}}" alt="image">
            </div>
            <div class="div_deg">
                <label for="">Change image</label>
                <input type="file" name="image">
            </div>
            <div class="div_deg">
                <input class="btn btn-primary" type="submit" value="Update product">
            </div>
        </form>
    </center>   
    </body>
</html>