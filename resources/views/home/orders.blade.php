<!DOCTYPE html>
<html lang="en">
<head>
  <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comandes</title>
    @include('home.css')
</head>
<body>
<div class="container-scroller">
  @include('home.sidebare')
  <div class="container-fluid page-body-wrapper">
    @include('home.navebare')
    <div class="main-panel ">
<div class="container">
<div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Order Status</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            
                            <th> Client Name </th>
                            <th> Order No </th>
                            <th> Prix </th>
                            <th> Paiement Mode </th>
                            <th> Date de commande </th>
                            <th> Payment Status </th>
                            <th> Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($comandes as $comande)
                            @foreach($users as $user)
                            @foreach($les_prix as $prix)
                          <tr>
                            <td>
                              <span class="pl-2">{{$user}}</span>
                            </td>
                            <td>{{$comande->id}} </td>
                            <td> {{$prix}} DH </td>
                            
                            <td> {{$comande->mode_paiement}} </td>
                            <td> {{$comande->date_comande}} </td>
                            @if($comande->status_comande=='en cours')
                            <td>
                              <div class="badge badge-outline-warning">{{$comande->status_comande}}</div>
                            </td>
                            <td>
                              <a href="{{url('redirect/comandes/affecter',$comande->id)}}"><div class="badge badge-outline-primary">Affecter</div></a>
                            </td>
                            @else
                            <td>
                              <div class="badge badge-outline-sucess">{{$comande->status_comande}}</div>
                            </td>
                            @endif
                           
                           
                          </tr>
                              @endforeach
                            @endforeach
                          @endforeach
                          
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
            
@include('home.scripts')

</body>
</html>