<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customebille</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
     integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
     crossorigin="anonymous"></script>

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
    <div class=" bg-warning text-dark p-2 " style="margin-bottom: 0%;">

        <!-- <i class="fa-solid fa-bars  " style="padding-left: 15%; color: aliceblue;"></i> -->



        <i class="fa-solid fa-user " style="padding-left: 75%; color:#807c7c; "></i>
    </div>

    <div class="container-fluid p-0">
        <div class="d-inline-flex">
            @include('sidenav')


            <div class="d-flex p-3">

                <form method="POST" >
                    @csrf




                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Customer name</label>
                        <input type="text" id="Customer_name" class="form-control" name="Customer_name" placeholder="Customer name">
                    </div>
                    <div class="d-inline-flex" style >
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label"> Customer type </label>
                            <select id="Ctype" name="Ctype" class="form-select">
                                <option>Customer type</option>
                            </select>
                        </div>
                        <div class="mb-3" style="padding-left: 5%">
                            <label for="disabledTextInput" class="form-label">NIC</label>
                            <input type="text" id="NIC" class="form-control" name="NIC" placeholder="NIC">
                        </div>

                    </div>
                    <div>
                        <div class="d-inline-flex " style >
                            <div class="mb-3" >
                                <label for="disabledSelect" class="form-label"> Area </label>
                                <select id="disabledSelect" name="area" class="form-select">
                                    <option>Area</option>
                                </select>
                            </div>
                            <div class="mb-3" style="padding-left: 5%">
                                <label for="disabledTextInput" class="form-label">Mobile</label>
                                <input type="text" id="mobile" class="form-control" name="mobile" placeholder="mobile">
                            </div>

                        </div>
                    </div>




                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Address</label>
                        <input type="text" id="address"  name="address" class="form-control" placeholder="Address">
                    </div>
                    <div>
                        <div class="d-inline-flex " style >
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Item Name</label>
                                <input type="text" id="vatnum" class="form-control" name="vatnum" placeholder="Item name">
                            </div>
                            <div class="mb-3" style="padding-left: 5%">
                                <label for="disabledTextInput" class="form-label">Qty</label>
                                <input type="text" id="Svat" class="form-control" name="Qty" placeholder="S-vat">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="email">
                    </div>



                    <button type="submit" class="btn btn-outline-info update" style="justify-content: flex-end;">Update
                        <i class="fa-regular fa-floppy-disk"></i>

                    </button>

                </form>

            </div>

        </div>

    </div>



</body>
</html>
