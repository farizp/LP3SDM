<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>LP3SDM | {{ $title }}</title>
  </head>
  <body>
    @include('partials/navbar')
    
    <div class="mt-5 mb-5">
      @yield('container') <!-- diisi nama section-->
      </div>
      
      <div class="footer container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2021 Jynnn&middot; 
      </div>

      
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
      <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
      @include('sweetalert::alert')
      @stack('script')

      <script>
        $(document).ready(function($) {
    
            $('.hr_line').append('<hr class="break-sec-w">');
    
        });
    </script>
    
  </body>
</html>