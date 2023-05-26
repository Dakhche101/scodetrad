<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique</title>
@include('user.css')
<style>
   @media only screen and (min-width: 1000px) {
      section{
         padding-left: 161px;
      }
      .product{
        transition:.5s;
    }
    .product:hover{
      box-shadow: 1px 16px 90px -18px rgba(0,0,0,1);
-webkit-box-shadow: 1px 16px 90px -18px rgba(0,0,0,1);
-moz-box-shadow: 1px 16px 90px -18px rgba(0,0,0,1);
        transform:scale(1.1);
        transition:.5s;
    }
   }
  
  
  </style>
</head>
<body>
<div class="loading">
		<img src="images/logo.png" alt="Logo">
		<p>Loading...</p>
	</div>
@include('user.navbar')
@if(session('message')=='le produit est ajouter au pannier.' || session('message')=="votre comande et affectuer avec succée")
        <div class="alert alert-success alert-dismissible">
          <strong>{{session('message')}}!</strong>
        </div>
@elseif(session('message')=='le produit est déja ajouter au pannier.' ||session('message')=="vous navez pas le droit de comander autre jusqu'au votre comande doit etre livrer" )
      <div class="alert alert-danger alert-dismissible">
          <strong>{{session('message')}}!</strong>
        </div>
@endif

<div class="container-fluid" style="background-image: url('images/bg.jpg'); background-size: cover;width:100%;height:410px;background-repeat: repeat-y;">
  <!-- your content here -->
</div>

 



<!-- shop area start -->
<section class="tp-shop-area pb-120">
            <div class="container">
    @if(count($products)>0)

               <div class="row">
                     <div class="col-xl-9 col-lg-8">
                     <div class="tp-shop-main-wrapper">
                        
                        <div class="tp-shop-top mb-45">
                           <div class="row">
                              <div class="col-xl-6">
                                 <div class="tp-shop-top-left d-flex align-items-center ">
                               
                                    <div class="tp-shop-top-result">
                                       <p>Showing {{count($products)}} results</p>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-6">
                                 <div class="tp-shop-top-right d-sm-flex align-items-center justify-content-xl-end">
                                    <div class="tp-shop-top-select">
                                    <form method="GET" action="{{ route('redirect') }}">
                                       @csrf
                                       <select name='catégorie'>
                                          <option value='default'  selected>Default Sorting</option>
                                          <option value="robinettrie" >Robinettrie</option>
                                          <option value="sanitaire" >Sanitaire</option>
                                          <option value="carellage" >carellage</option>
                                          
                                       </select>
                                       
                                    </div>
                                    <div class="tp-shop-top-filter">
                                       <button type="submit" class="tp-filter-btn filter-open-btn">
                                          <span>
                                             <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.9998 3.45001H10.7998" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M3.8 3.45001H1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M6.5999 5.9C7.953 5.9 9.0499 4.8031 9.0499 3.45C9.0499 2.0969 7.953 1 6.5999 1C5.2468 1 4.1499 2.0969 4.1499 3.45C4.1499 4.8031 5.2468 5.9 6.5999 5.9Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M15.0002 11.15H12.2002" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M5.2 11.15H1" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                                <path d="M9.4002 13.6C10.7533 13.6 11.8502 12.5031 11.8502 11.15C11.8502 9.79691 10.7533 8.70001 9.4002 8.70001C8.0471 8.70001 6.9502 9.79691 6.9502 11.15C6.9502 12.5031 8.0471 13.6 9.4002 13.6Z" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                             </svg>
                                          </span>
                                          Filter
                                       </button>
                                       <form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-shop-items-wrapper tp-shop-item-primary">
                           <div class="tab-content" id="productTabContent">
                              <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel" aria-labelledby="grid-tab" tabindex="0">
                                 <div  class="row infinite-container">
                                    <!-- start product--------------------------------- -->
                                    @foreach($products as $product)
                                    <div  class="carde col-xl-3 col-md-6 col-sm-6 infinite-item product">
                                    <br>
                                       <div class="tp-product-item-2 mb-40">
                                          <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                                             <a href="{{url('redirect/productinfo',$product->id)}}">
                                                <img src="images/{{$product->image}}" alt="" width="30px" height="180px">
                                             </a>
                                             <!-- product action -->
                                             
                                          </div>
                                          <div class="tp-product-content-2 pt-15">
                                             <div class="tp-product-tag-2">
                                                <a href="#">{{$product->catégorie}}</a>
                                             </div>
                                             <h3 class="tp-product-title-2">
                                                <a href="{{url('redirect/productinfo',$product->id)}}">{{$product->title}}</a>
                                             </h3>
                                             <div class="tp-product-rating-icon tp-product-rating-icon-2">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                             </div>
                                             <div class="tp-product-price-wrapper-2">
                                                <span class="tp-product-price-2 new-price">{{$product->prix}} DH</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    
                                    @endforeach
                            <!-- fin de produit-------------------------------------------------------- -->
                                    
                                 </div>
                              </div>

                              <!-- start product md sccren---------------------------- -->
                              
    @else
                                                <h1>you not have any product in your website</h1>
    @endif
                                          </div>
                              <!-- end product md sccren---------------------------- -->

                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>                            
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- shop area end -->
@include('user.script')
@include('user.footer')
         </body>
</html>