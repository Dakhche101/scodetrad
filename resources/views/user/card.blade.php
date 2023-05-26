<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paniuer</title>
    @include('user.css')
    <style>
      .card{
        border:none;
      }
      button{
        height:40px;
      }
      .section{
        box-shadow: 1px 16px 90px -18px rgba(0,0,0,1);
-webkit-box-shadow: 1px 16px 90px -18px rgba(0,0,0,1);
-moz-box-shadow: 1px 16px 90px -18px rgba(0,0,0,1);
      }
        /* .gradient-custom {
          background-image: linear-gradient(to right bottom, #fffefe, #cac9c9, #979697, #676767, #3b3b3b, #392f3b, #3e2131, #420f1d, #710826, #a20027, #d2001f, #ff0000);
} */
        /* .gradient-custom {
background: #6a11cb;

background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
} */
    </style>
</head>
<body>
@include('user.navbar')

    
<section class="h-100 gradient-custom">
@if(session('message'))
        <div class="alert alert-danger alert-dismissible">
          <strong>{{session('message')}}!</strong>
        </div>

@endif
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="section card mb-4">
          <div class="card-header py-3">
            <!-- variable count of table cart -->
            <h5 class="mb-0">Cart - {{$data["count"]}} items</h5>
          </div>
          <div class="card-body">
            <!-- Single item -->
            @if(count($data["data"])>0)
            @foreach($data["data"] as $product)
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="images/{{$product->image}}"
                    class="w-100" alt="Blue Jeans Jacket" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <h3>{{$product->title}}</h3>
                <div class="tp-product-rating-icon tp-product-rating-icon-2">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
        </div>
                <p>Quantité : {{$product->quantité}}</p>
                <form method="POST" action="{{url('/redirect/remove',$product->id)}}">
                @csrf
                @method('GET')

                <button type="submit" class="btn btn-primary btn-sm me-1 mb-2" data-mdb-toggle="tooltip"
                  title="Remove item">
                  <i class="fas fa-trash"></i>
                </button>
                </form>
                <!-- Data -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong>{{$product->prix}} DH</strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->

            <hr class="my-4" />
            @endforeach

            
            <!-- Single item -->
          </div>
        </div>
        <div class="section card mb-4">
          <div class="card-body">
            <p><strong>Expected shipping delivery</strong></p>
            <p class="mb-0"><?php
            $current_date = date('Y/m/d');
            $three_days = date('Y/m/d', strtotime($current_date . ' +3 days'));
            $six_days = date('Y/m/d', strtotime($current_date . ' +6 days'));
            
            
            echo"$three_days"." - "."$six_days" ;?> </p>
            </div>
        </div>
        <div class="section card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>We accept</strong></p>
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
              alt="Visa" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
              alt="American Express" />
            <img class="me-2" width="45px"
              src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
              alt="Mastercard" />
            <img class="me-2" width="45px"
            src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" alt="PayPal Logo">

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="section card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong>
                </div>
                <span><strong>{{$data["prix_totale"]}} DH</strong></span>
              </li>
            </ul>
          <form methode="GET" action="{{url('/redirect/card/comande')}}">
          @csrf
          <div class="form-group">
                  <label>
                    <input type="radio" name="typeshop" value="cache">
                    cache à la livraison
                  </label>
                  <label>
                    <input type="radio" name="typeshop" value="online">
                    payement en ligne
                  </label>
          </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              Comander
            </button>
            </form>
          </div>
            @else
            <h1>not have any product in your cart</h1>
            @endif
        </div>
      </div>
    </div>
  </div>
</section>


@include('user.script')
@include('user.footer')


</body>
</html>