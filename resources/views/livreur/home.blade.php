<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>livreur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <a class="btn bnt-primary" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                    this.closest('form').submit();">
        {{ __('Log Out') }}
    </a>
</form>
    <h1>livreur</h1>

    <div class="table-responsive">
  <table class="table ">
    <thead>
        <tr>
            <th>reference</th>
            <th>Client</th>
            <th>Telephone</th>
            <th>Address</th>
            <th>Montant</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>