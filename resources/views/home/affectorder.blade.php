<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affecter</title>
    @include('home.css')
</head>
<body>
    
<div class="container-scroller">
  @include('home.sidebare')
  <div class="container-fluid page-body-wrapper">
    @include('home.navebare')
    <div class="main-panel ">


<h1>livreuer affect</h1>
<div class="table-responsive">
  <table class="table ">
    <thead>
        <tr>
            <th>ID</th>
            <th>livreur</th>
            <th>Telephone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->address}}</td>
        <td><a href="{{route('hz',['livreur'=>$user->id,'comande'=>$id])}}"><div class="badge badge-outline-primary">Affecter</div></a></td>
        @endforeach
    </tbody>
  </table>
</div>

</div>
</div>
</div>


@include('home.scripts')
</body>
</html>