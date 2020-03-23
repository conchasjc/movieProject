<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
        <meta name="Author" content="John Carlo Guan Conchas">
        <title>CinemaBook</title>
        <link rel="stylesheet" href="{{asset('../css/app.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('../img/BrandLogo.png')}}" type="image/x-icon">
      </head>


    <body> 
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
            <div class="container">
                <a class="navbar-brand" href="/"> <img src="{{asset('img/BrandLogo.png')}}" height="30" class="navbar-logo" alt=""> CinemaBook</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" href="/">View Movies</a>
                      </li>
                      <li class="nav-item {{ (request()->is('/')) ? '' : 'active' }}">
                        <a class="nav-link" href="/ManageMovies">Manage Movies</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section>
            @yield('content')
        </section>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
          $('.updateButton').on('click',function() {
            $('#myModalUpdate').modal('show');
            $tr=$(this).closest('tr');
          
            var data=$tr.children("td").map(function() {
              return $(this).text();
            }).get();
            console.log(data);
            $('#m_name').val(data[1]);
            $('#m_desc').val(data[4]);
            $('#m_date').val(data[3]);
            $('#m_genre').val(data[2]);
          })
        </script>
      
      </body>
</html>
