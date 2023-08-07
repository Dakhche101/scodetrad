
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
@include('home.css')
  </head>
  <body>
    <div class="container-scroller">
      @include('home.sidebare')
      <div class="container-fluid page-body-wrapper">
        @include('home.navebare')
        @include('home.body')
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">scodetrad Copyright © 2023</span>
            
          </footer>
        </div>
      </div>
    </div>
@include('home.scripts')

  </body>
</html>