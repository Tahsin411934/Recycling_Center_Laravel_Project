<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="main">
  <div class="d-flex p-3 justify-content-center p-5">
    <form action="{{route('login_user')}}" method="post">
      @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>   
        @endif
        @if (Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        
        
    <div class="container text-center">
    
            
        </div>
        <div class="container text-center">
      
        
            
      </div>
      <div class="col">
          <div class="mb-3">
          <img src="img/img-9.png" class="rounded mx-auto d-block p-2" alt="">  
          <p> <b>Welcome back</b> </p>
        
         
              <h4 style="text-align: center">Recycling Center</h4>
              <h6>"Transforming Waste into Resources: Our Recycling Center"</h6>
              
                <label alig for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="" name="password">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>
            
            <button class= "btn btn-primary btn-block">Log In</button>
            <button class="btn btn-lg btn-block">New user?<a href="registration">Sign Up</a></button>
        </div>
        
        <div class="col">
        </div>
      </div>
    </div>
    </form>
    </div>
    </div> 
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>