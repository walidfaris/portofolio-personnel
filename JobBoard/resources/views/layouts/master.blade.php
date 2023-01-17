<!doctype html>
<html lang="en">
  <head>
    @include('partials.entete')
  </head>
  <body>
    @include('partials.nav')
    @include('partials.header')
    @include('partials.corps')
    <div>
        @yield('contenu')
    </div>
    
   

<script  src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2d1cdb0a29.js" crossorigin="anonymous"></script>
  </body>
</html>