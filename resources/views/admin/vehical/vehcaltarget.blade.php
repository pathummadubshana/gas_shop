<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vehical Target</title>
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
    <div class=" bg-warning text-dark p-2 " style="margin-bottom: 0%;">

        <!-- <i class="fa-solid fa-bars  " style="padding-left: 15%; color: aliceblue;"></i> -->



        <i class="fa-solid fa-user " style="padding-left: 75%; color:#807c7c; "></i>
    </div>



    <div class="container-fluid p-0">
        <div class="d-inline-flex">
            @include('sidenav')

            <div class="d-flex p-3">

                <form method="POST" action="{{ url('admin/create') }}">
                    @csrf

                    <div class="mb-3" >
                        <label for="disabledSelect" class="form-label"> Vehical</label>
                        <select id="vehical" name="vehical" class="form-select">
                            <option>select</option>
                            <option>cab</option>
                            <option>lorry</option>
                        </select>
                    </div>



                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Month</label>
                        <input type="date" id="month" class="form-control" name="month" placeholder="Employee nam">
                    </div>
                    <div class="mb-3" >
                        <label for="disabledSelect" class="form-label"> Product </label>
                        <select id="product" name="product" class="form-select">
                            <option>Select</option>
                            <option>big</option>
                            <option>smole</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Target Cylinder</label>
                        <input type="text" id="cylinder"  name="cylinder" class="form-control" placeholder="Target Cylinder">
                    </div>







                    <button type="submit" class="btn btn-outline-info" style="justify-content: flex-end;">Add
                        <i class="fa-regular fa-floppy-disk"></i>

                    </button>

                </form>
            </div>
            @include('admin.vehical.vehicalindex')


        </div>

    </div>

</body>
</html>
