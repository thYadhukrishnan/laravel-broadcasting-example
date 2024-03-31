<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <h2>User Registration</h2>
                </div>
                <div class="row">
                    <form action="{{route('userSave')}}" method="post" id="registration-form">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="name" id="form2Example1" class="form-control" name="name"/>
                            <label class="form-label" for="form2Example1">User Name</label>
                        </div>
    
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" class="form-control" name="email"/>
                            <label class="form-label" for="form2Example1">Email address</label>
                        </div>
                    
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="form2Example2" class="form-control" name="password"/>
                            <label class="form-label" for="form2Example2">Password</label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('#registration-form').validate({
                rules:{
                    name:{
                        required: true,
                    },
                    email:{
                        required:true,
                        email:true,
                    },
                    password:{
                        required: true,
                    },
                },
                messages:{
                    name:{
                        required: 'required',
                    },
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