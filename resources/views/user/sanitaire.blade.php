<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

@include('user.navbar')

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
                                    <form method="GET" >
                                       @csrf
                                       <select>
                                          <option  >Default Sorting</option>
                                          <option value="robinettrie">Robinettrie</option>
                                          <option value="sanitaire" selected>Sanitaire</option>
                                          <option value="carellage">carellage</option>
                                          
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
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="tp-shop-items-wrapper tp-shop-item-primary">
                           <div class="tab-content" id="productTabContent">
                              <div class="tab-pane fade show active" id="grid-tab-pane" role="tabpanel" aria-labelledby="grid-tab" tabindex="0">
                                 <div class="row infinite-container">
                                    <!-- start product--------------------------------- -->
                                    @foreach($products as $product)
                                    <div class="carde col-xl-3 col-md-6 col-sm-6 infinite-item product">
                                       <div class="tp-product-item-2 mb-40">
                                          <div class="tp-product-thumb-2 p-relative z-index-1 fix w-img">
                                             <br>
                                             <a href="{{url('redirect/productinfo',$product->id)}}">
                                                <img src="images/{{$product->image}}" alt="" height="180px">
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
                              <div class="tab-pane fade" id="list-tab-pane" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
                                 <div class="tp-shop-list-wrapper tp-shop-item-primary mb-70">
                                    <div class="row">
                                       <div class="col-xl-12">
                                          <div class="tp-product-list-item d-md-flex">
                                            @foreach($products as $product)
                                             <div class="tp-product-list-thumb p-relative fix">
                                                <a href="#">
                                                   <img src="images/{{$product->image}}" alt="">
                                                </a>
               
                                                <!-- product action -->
                                                <div class="tp-product-action-2 tp-product-action-blackStyle">
                                                   <div class="tp-product-action-item-2 d-flex flex-column">
                                                      <button type="button" class="tp-product-action-btn-2 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                         <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor"/>
                                                         </svg>                                                                       
                                                         <span class="tp-product-tooltip tp-product-tooltip-right">Quick View</span>
                                                      </button>
                                                      <button type="button" class="tp-product-action-btn-2 tp-product-add-to-wishlist-btn">
                                                         <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor"/>
                                                         </svg>                                                                               
                                                         <span class="tp-product-tooltip tp-product-tooltip-right">Add To Wishlist</span>
                                                      </button>
                                                      <button type="button" class="tp-product-action-btn-2 tp-product-add-to-compare-btn">
                                                         <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M11.4144 6.16828L14 3.58412L11.4144 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M1.48883 3.58374L14 3.58374" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M4.07446 8.32153L1.48884 10.9057L4.07446 13.4898" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M14 10.9058H1.48883" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                         </svg>                                                                            
                                                         <span class="tp-product-tooltip tp-product-tooltip-right">Add To Compare</span>
                                                      </button>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="tp-product-list-content">
                                                <div class="tp-product-content-2 pt-15">
                                                   <div class="tp-product-tag-2">
                                                      <a href="#">{{$product->catégorie}} </a>
                                                   </div>
                                                   <h3 class="tp-product-title-2">
                                                      <a href="product-details.html">{{$product->title}}</a>
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
                                                   <p>{{$product->description}}</p>
                                                   <div class="tp-product-list-add-to-cart">
                                                      <button class="tp-product-list-add-to-cart-btn">Add To Cart</button>
                                                   </div>
                                                </div>
                                             </div>
                                             @endforeach
    @else
                                                <h1>you not have any product in your siteweb</h1>
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


    @include('user.script')
    @include('user.footer')
    
</body>
</html>