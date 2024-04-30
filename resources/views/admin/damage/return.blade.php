<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Damagereturn</title>

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

                <form method="POST" action="{{ url('damage/create') }}">
                    @csrf

                    <div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="new" id="new" value="new">
                            <label class="form-check-label" for="new">
                              New Customer
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="new"   id="exist"  value="exist">
                            <label class="form-check-label" for="exist">
                              Exist Customer
                            </label>
                          </div>

                    </div>

                    <div>
                        <div class="d-inline-flex">
                            <div class="mb-3" >
                                <label for="name"  class="form-label">Name</label>
                                <input type="text" id="name" size="3" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="mb-3">
                                <label for="number"  class="form-label">Contact</label>
                                <input type="text" id="number" size="3"  style="margin-left:10%"  name="number" class="form-control" placeholder="Contact">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="d-inline-flex">
                            <div class="mb-3" >
                                <label for="area" class="form-label"> Area</label>
                                <select id="area" name="area" class="form-select">
                                    <option>select</option>
                                    <option>cab</option>
                                    <option>lorry</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" size="3" style="margin-left:10%"   name="address" class="form-control" placeholder="Address">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="d-inline-flex">
                            <div class="mb-3" >
                                <label for="sales" class="form-label"> Sales Rep</label>
                                <select id="sales" name="sales" class="form-select">
                                    <option>select</option>
                                    <option>cab</option>
                                    <option>lorry</option>
                                </select>
                            </div>

                            <div class="mb-3" >
                                <label for="vehical" class="form-label"> Vehical</label>
                                <select id="vehical" name="vehical" style="margin-left:10%"  class="form-select">
                                    <option>select</option>
                                    <option>cab</option>
                                    <option>lorry</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3" >
                        <label for="return" class="form-label"> Return type</label>
                        <select id="return" name="return" class="form-select">
                            <option>select</option>
                            <option>cab</option>
                            <option>lorry</option>
                        </select>
                    </div>
                    <div class="mb-3" >
                        <label for="product" class="form-label"> Product</label>
                        <select id="product" name="product" class="form-select">
                            <option>select</option>
                            <option>cab</option>
                            <option>lorry</option>
                        </select>
                    </div>





                    <div class="mb-3">
                        <label for="qty" class="form-label">Qty</label>
                        <input type="text" id="qty"  name="qty" class="form-control" placeholder="Qty">
                    </div>







                    <button type="submit" class="btn btn-outline-info" style="justify-content: flex-end;">Add
                        <i class="fa-regular fa-floppy-disk"></i>

                    </button>

                </form>
            </div>
            @include('admin.damage.returnindex')




        </div>

    </div>


</body>
</html>
