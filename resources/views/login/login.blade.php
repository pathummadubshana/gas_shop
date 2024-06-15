<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<!-- fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Header -->
    <div class=" bg-warning text-dark p-2 text-end"  style="margin-bottom: 0%;">

        {{--  <i class="fa-solid fa-bars  " style="padding-left: 15%; color: aliceblue;"></i>  --}}
        <a href="" class="link-offset-2 link-underline link-underline-opacity-0 link-success " style="margin-right: 10px; ">Login</a>
        <a href="/register" class="link-offset-2 link-underline link-underline-opacity-0 " style="margin-right: 20px">Rgister</a>



        {{--  <i class="fa-solid fa-user " style="padding-left: 75%; color:#807c7c; "></i>  --}}
    </div>

    <div class="container-fluid p-3 " >





            <div class=" border border-warning rounded " style="width: 500px;  margin:auto ">
                <div style="background-color: #edece6" class="rounded-top">
                    <img src="images/pngegg.png"  style="margin-left: 30%;width:200px;background-color:#ffc107" alt="silinder" class="img-thumbnail">
                </div>
                <div class="p-3">
                    <form  method="POST" action="{{ url('login') }}" >
                        @csrf


                        <div class="form-group" style="margin-top: 5%">
                          <label for="exampleInputEmail1">Username</label>
                          <input type="text" class="form-control" id="Username" name="username"  placeholder="Username">

                        </div>
                        <div class="form-group" style="margin-top: 2%">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="form-group" style="margin-top:5%">
                            <button type="submit" class="btn btn-warning" onclick="login()" style="margin-left: 40%" name="login">Login</button>

                        </div>
                      </form>
                </div>


                  <div class=" bg-warning  p-3 " style="margin-bottom: 0%;">

                  </div>
            </div>





    </div>





</body>
</html>
