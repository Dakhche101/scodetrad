<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
    @include('home.css')
</head>
<body>
<div class="container-scroller">
  @include('home.sidebare')
  <div class="container-fluid page-body-wrapper">
    @include('home.navebare')
    <div class="main-panel ">
    <form method="GET" action="{{url('redirect/update',$product->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="product-name">Product Name:</label>
                  <input style="width:270px;" name="title" type="text" class="bg-white text-dark form-control" id="product-name" value="{{$product->title}}" required>
                </div>
                <div class="form-group">
                  <label for="product-description">Product Description:</label>
                  <textarea style="width:270px;" name="description" class="bg-white text-dark form-control" id="product-description"   required>{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                  <label for="product-price">Product Price:</label>
                  <input style="width:190px;" name="prix" type="text" class="bg-white text-dark form-control" id="product-price" pattern="^\d+(\.\d{1,2})?$" value="{{$product->prix}}"  required >
                </div>
                <div class="form-group">
                  <label for="product-quantité">Product Quantité:</label>
                  <input style="width:190px;" name="quantité" type="number" class="bg-white text-dark form-control" id="product-quantité" value="{{$product->quantité}}"  min=1  required>
                </div>
                <div class="form-group">
                  <label>
                    <input type="radio" name="catégorie" value="robinettrie">
                    Robinettrie
                  </label>
                  <label>
                      <input type="radio" name="catégorie" value="sanitaire">
                      Sanitaire
                  </label>
                  <label>
                      <input type="radio" name="catégorie" value="carellage">
                      Carellage
                  </label>
                </div>
                
            
              <input type="submit" class="btn btn-primary" value ="editer">
              </form>
</div>
</div>
</div>

@include('home.scripts')
    
</body>
</html>