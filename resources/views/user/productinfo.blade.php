<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Detail</title>
  <!-- Bootstrap CSS -->
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  @include('user.css')
 
</head>
<body>
@include('user.navbar')

<div class="container-fluid">
    <p style="text-decoration:underline;" class="h1 text-center">Product detaille</p>
</div>
  <div class="container product">
    <br>
    <div class="row">
      <div class="col-md-6">
        <img src="images/{{$product->image}}" alt="{{$product->title}} image" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h1 class="h2">{{$product->title}}</h1>
        <h1 class="h2">{{$product->id}}</h1>
        <div class="tp-product-rating-icon tp-product-rating-icon-2">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
        </div>
        <p class="lead">{{$product->description}}</p>
        <hr>
       <form method="Post" action="{{url('redirect/addcart',$product->id)}}">
        @csrf
        <div class="form-group">
            <label for="product-quantité">Quantité:</label>
            <input style="width:100%;padding:0px;height:30px;" name="quantité" type="number" class="bg-white text-center text-dark form-control" id="product-quantité" placeholder="Enter product quantité" min="1" max="{{$product->quantité}}"  title="hamza" required>
        </div>
      
        <hr>
        <h2 class="h4">Prix</h2>
        <p class="lead">{{$product->prix}} DH</p>
        <button type="submit" class="btn btn-primary">Add to Cart</button>
        </form>
        <br>
      </div>
    </div>
  </div>
  <br><br>
  <!-- Bootstrap JavaScript -->
@include('user.script')
@include('user.footer')
</body>
</html>


