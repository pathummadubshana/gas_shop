<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header -->
    <div class=" bg-warning text-dark p-2 " style="margin-bottom: 0%;">

        <!-- <i class="fa-solid fa-bars  " style="padding-left: 15%; color: aliceblue;"></i> -->



        <i class="fa-solid fa-user " style="padding-left: 75%; color:#807c7c; "></i>
    </div>



<div class="container-fluid p-0 ">
    <div class="d-inline-flex">

@include('sidenav')
{{--  @include('display')
@include('insert')  --}}
    <div class="d-flex p-3" >




         <form method="POST" action="{{ url('/order/placement') }}">
            @csrf



            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Product</label>
                <input type="text" id="product" class="form-control" name="product" placeholder="Product">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Product code</label>
                <input type="text" id="code" class="form-control" name="code" placeholder="Product code">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Qty</label>
                <input type="text" id="Refilprice" name="qty" class="form-control" placeholder="qty">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Customer name</label>
                <input type="text" id="Refilprice" name="name" class="form-control" placeholder="Customer name">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Address</label>
                <input type="text" id="Refilprice" name="address" class="form-control" placeholder="Address">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Mobile</label>
                <input type="text" id="Refilprice" name="mobile" class="form-control" placeholder="Mobile">
            </div>



            <button type="submit" class="btn btn-outline-info" style="justify-content: flex-end;">Add
                <i class="fa-regular fa-floppy-disk"></i>

            </button>

        </form>

        <div class="d-flex p-3">
        <table class="table table-bordered table-ligh">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product</th>
                    <th scope="col">product Code</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->product }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->mobile }}</td>
                    <td>
                        <a href="/edit/tracking/{{ $item->id }}" class="btn btn-primary "><i class="fa-solid fa-sitemap"></i></a>
                    </td>
                </tr>

                @endforeach





        </tbody>

        </table>
        </div>


    </div>


</div>




</body>

</html>

