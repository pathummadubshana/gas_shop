<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    <div class=" bg-warning text-dark p-2 " style="margin-bottom: 0%;">

        <!-- <i class="fa-solid fa-bars  " style="padding-left: 15%; color: aliceblue;"></i> -->



        <i class="fa-solid fa-user " style="padding-left: 75%; color:#807c7c; "></i>
    </div>
    <div class="container-fluid p-0">

        <div class="d-inline-flex">
            @include('sidenav')

            <div class="d-flex p-3">


                <form method="POST" action="/update/customer/{{ $customer->id }}">
                    @csrf
                    @method('PUT')




                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Customer name</label>
                        <input type="text" id="name" value="{{ $customer->name }}" class="form-control" name="name"
                            placeholder="Customer name">
                    </div>
                    <div class="d-inline-flex" style>
                        <div class="mb-3">
                            <label for="disabledSelect" class="form-label"> Customer type </label>
                            <select id="disabledSelect" value="{{ $customer->type }}" name="type" class="form-select">
                                <option>Customer type</option>
                            </select>
                        </div>
                        <div class="mb-3" style="padding-left: 5%">
                            <label for="disabledTextInput" class="form-label">NIC</label>
                            <input type="text" id="nicC" value="{{ $customer->nic }}" class="form-control" name="nic" placeholder="NIC">
                        </div>

                    </div>
                    <div>
                        <div class="d-inline-flex " style>
                            <div class="mb-3">
                                <label for="disabledSelect" class="form-label"> Area </label>
                                <select id="disabledSelect" value="{{ $customer->area }}" name="area" class="form-select">
                                    <option>Customer type</option>
                                </select>
                            </div>
                            <div class="mb-3" style="padding-left: 5%">
                                <label for="disabledTextInput" class="form-label">Mobile</label>
                                <input type="text" value="{{ $customer->mobile }}" id="mobile" class="form-control" name="mobile"
                                    placeholder="mobile">
                            </div>

                        </div>
                    </div>




                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Address</label>
                        <input type="text" id="address" value="{{ $customer->address }}" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div>
                        <div class="d-inline-flex " style>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Vat num</label>
                                <input type="text" id="Vat_num" value="{{ $customer->vatnum }}" class="form-control" name="vatnum"
                                    placeholder="Vat num">
                            </div>
                            <div class="mb-3" style="padding-left: 5%">
                                <label for="disabledTextInput" class="form-label">S-vat</label>
                                <input type="text" id="Svat" value="{{ $customer->svat }}" class="form-control" name="Svat"
                                    placeholder="S-vat">
                            </div>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Email</label>
                        <input type="email" id="email" value="{{ $customer->email }}" name="email" class="form-control" placeholder="email">
                    </div>



                    <button type="submit" class="btn btn-outline-info" style="justify-content: flex-end;">Update
                        <i class="fa-regular fa-floppy-disk"></i>

                    </button>

                </form>




            </div>




            </div>
        </div>
    </div>

</body>

</html>
