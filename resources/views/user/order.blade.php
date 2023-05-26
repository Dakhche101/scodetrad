<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Order Form</title>
  @include('user.css')
  <style>

    body {
      background-image: url("path/to/background-image.jpg");
      background-size: cover;
    }

    .order-form {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      max-width: 400px;
      margin: 0 auto;
      margin-top: 100px;
    }
  </style>
</head>
<body>
    @include('user.navbar')
  <div class="container">
    <div class="order-form">
      <form methode="GET" action="{{route('comander')}}">
        @csrf
        <h3 class="text-center">Commande</h3>
        <div class="form-group">
          <label for="name"><i class="bi bi-person"></i> Name</label>
          <input type="text" class="form-control" id="name" value="{{$data->name}}" disabled>
        </div>
        <div class="form-group">
          <label for="phone"><i class="bi bi-envelope"></i> Phone</label>
          <input type="text" class="form-control" id="phone" value="{{$data->phone}}" disabled>
        </div>
        <div class="form-group">
          <label for="email"><i class="bi bi-envelope"></i> Email</label>
          <input type="email" class="form-control" id="email" value="{{$data->email}}" disabled>
        </div>
      
        <div class="form-group">
          <label for="floatingTextarea2"><i class="bi bi-geo-alt"></i> Address</label>
          <textarea class="form-control" id="floatingTextarea2" style="height: 100px" disabled>{{$data->address}}</textarea>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"  required>
          <label class="form-check-label" for="flexCheckDefault">
            j'accepter cette comande
          </label>
        </div>
       <br>
        <button type="submit" class="btn btn-primary btn-block"><i class="bi bi-arrow-right"></i> Place Order</button>
      </form>
    </div>
  </div>

@include('user.script')
@include('user.footer')
</body>
</html>
