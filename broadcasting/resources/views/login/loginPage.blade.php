<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Log In</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row px-5 pt-4">
            @if (Session::has('message'))
                <div class="alert alert-danger">{{ Session::get('message') }}</div>
            @endif
            <div class="col mx-5">
                <form action="{{route('doLogin')}}" method="POST" id="login-form">
                    @csrf
                    <div class="row">
                        <h2>Log In</h2>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example1" class="form-control" name="email" />
                      <label class="form-label" for="form2Example1">Email address</label>
                    </div>
                  
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example2" class="form-control" name="password" />
                      <label class="form-label" for="form2Example2">Password</label>
                    </div>
                  
                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                      <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                          <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                      </div>
                  
                      <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Forgot password?</a>
                      </div>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                  
                    <!-- Register buttons -->
                    <div class="text-center">
                      <p>Not a member? <a href="{{route('register')}}">Register</a></p>
                    </div>
                  </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('#login-form').validate({
                rules:{
                    email:{
                        required:true,
                        email:true,
                    },
                    password:{
                        required: true,
                    },
                },
                messages:{
                    email:{
                        required: 'required',
                        email: 'valid email',
                    },
                    password:{
                        required:'required',
                    },
                },        
            });
        });
    </script>
</body>
</html>