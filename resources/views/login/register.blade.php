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
<body >
    <!-- Header -->
    <div class=" bg-warning text-dark p-2 text-end"  style="margin-bottom: 0%;">

        {{--  <i class="fa-solid fa-bars  " style="padding-left: 15%; color: aliceblue;"></i>  --}}
        <a href="" class="link-offset-2 link-underline link-underline-opacity-0 link-success " style="margin-right: 10px; ">Login</a>
        <a href="/register" class="link-offset-2 link-underline link-underline-opacity-0 " style="margin-right: 20px">Rgister</a>



        {{--  <i class="fa-solid fa-user " style="padding-left: 75%; color:#807c7c; "></i>  --}}
    </div>

    <div class="container-fluid p-3 " >





            <div class=" border border-primary p-3  " style="width: 50%; height:100%; margin:auto ">
              <img src="images/pngegg.png"  style="margin-left:40%;width:200px;background-color:#ffc107" alt="silinder" class="img-thumbnail">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">First name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First name">

                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Last name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lastname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nic</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nic">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group" style="margin-top:5%">
                        <button type="submit" class="btn btn-primary" style="margin-left: 40%">Rgister</button>

                    </div>


                  </form>
            </div>





    </div>





</body>
</html>
