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
  <body class=" ">
   <div class="main">
   <!-- <img class="rounded" src="img/img-8.jpg" alt=""> -->
  
  <div class="d-flex p-3 justify-content-center">
    
    

    <form action="{{route('register_user')}}" method="post">
        @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>   
        @endif
        @if (Session::has('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        
        
    <div class="container text-center">
      
        
            
        </div>
        <div class="col">
            <div class="mb-3">
            <img src="img/img-9.png" class="rounded mx-auto d-block p-2" alt="">  
          <p> <b>Welcome To</b> </p>
                <h4 style="text-align: center">Recycling Center</h4>
                <h6>"Transforming Waste into Resources: Our Recycling Center"</h6>
                
                <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
               
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
               
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
              
                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                <span class="text-danger">
                    @error('confirm_password')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
            <select class="form-control" id="gender" name="gender" required>
            <option value="" selected disabled>Select your gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
                <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="mb-3">
                
                <input type="text" class="form-control" id="address" placeholder="Address" name="address">
                <span class="text-danger">
                    @error('address')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <!-- <div class="mb-3">
                <label for="image">upload Your Image</label>
                <input type="file" class="" id="image" placeholder="image" name="image">
                <span class="text-danger">
                    @error('image')
                        {{$message}}
                    @enderror
                </span>
            </div> -->
           
            <button class= "btn btn-primary btn-block">Submit</button>
            <button class="btn btn-lg btn-block">already user?<a href="login">Log In</a></button>
        </div>
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