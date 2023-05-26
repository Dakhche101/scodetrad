<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="UTF-8">

  
    @include('home.css')
   
    <link rel="stylesheet" href="https://cdn.tailwindcss.com/css/tailwind.min.css">

</head>
<body>
<div class="container-scroller">
  @include('home.sidebare')
  <div class="container-fluid page-body-wrapper">
    @include('home.navebare')
    <div class="main-panel ">
      @if(session('success'))
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true">X</button>
          <strong>{{session('success')}}!</strong>
        </div>
      @endif
      
        <a style="width:120px;position:float;" class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="modal" data-bs-target="#exampleModal" >+ Ajouter Un Produit</a>
        <p class="h1 text-center">Products</p>
        @if(count($products)>0)
          <div class="products container-fluid">
            <table class="table bg-light">
              <thead>
                <tr>
                  <th>reference</th>
                  <th>title</th>
                  <th>description</th>
                  <th>prix unitaire </th>
                  <th>quantité</th>
                  <th>catégorie</th>
                  <th>image</th>
                  <th>edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{$product['id']}}</td>
                  <td>{{$product['title']}}</td>
                  <td>{{$product['description']}}</td>
                  <td>{{$product['prix']}} DH</td>
                  <td>{{$product['quantité']}}</td>
                  <td>{{$product['catégorie']}}</td>
                  <td><img src="images/{{$product->image}}" alt="{{$product['title']}}" height=120px></td>
                  <td><a href="{{url('redirect/edit',$product->id)}}"><button class="btn btn-success"> Editer</button></a>
                  <a href="{{url('redirect/delete',$product->id)}}"><button class="btn btn-danger"> supprimer</button></a>
                </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            @else
              <h1>no product in data base</h1>
            @endif
            























        </div>
    </div>
  </div>
</div>

    

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
          <div class="modal-content bg-secondary text-dark">
            <div class="modal-header bg-light text-dark text-center">
              <h5 class="modal-title " id="exampleModalLabel">Ajouter un produit</h5>
            </div>
            <div class="modal-body bg-dark bg-gradient text-white">
              <form method="POST" action="{{url('/addproduct')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="product-name">Product Name:</label>
                  <input style="width:270px;" name="title" type="text" class="bg-white text-dark form-control" id="product-name" placeholder="Enter product name" required>
                </div>
                <div class="form-group">
                  <label for="product-description">Product Description:</label>
                  <textarea style="width:270px;" name="description" class="bg-white text-dark form-control" id="product-description" placeholder="Enter product description" required></textarea>
                </div>
                <div class="form-group">
                  <label for="product-price">Product Price:</label>
                  <input style="width:190px;" name="prix" type="text" class="bg-white text-dark form-control" id="product-price" pattern="^\d+(\.\d{1,2})?$" placeholder="Enter product price" required >
                </div>
                <div class="form-group">
                  <label for="product-quantité">Product Quantité:</label>
                  <input style="width:190px;" name="quantité" type="number" class="bg-white text-dark form-control" id="product-quantité" placeholder="Enter product quantité" min=1  required>
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
                <div class="form-group">
                  <label for="product-image">Product Image:</label>
                  <input name="image" type="file" class=" form-control-file" id="product-image" required>
                </div>
            </div>
            <div class="modal-footer text-dark">
              <input type="submit" class="btn btn-primary" value ="+Ajouter">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </form>
            </div>
          </div>
        </div>
      </div>
     





  @include('home.scripts')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>