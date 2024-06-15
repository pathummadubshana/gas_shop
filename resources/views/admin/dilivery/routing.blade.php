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




         <form method="POST" action="{{ url('product') }}">
            @csrf



            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Product</label>
                <input type="text" id="product" class="form-control" name="product" placeholder="Product">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Delivery area</label>
                <input type="text" id="code" class="form-control" name="area" placeholder="Dlivery area">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Vehical Number</label>
                <input type="text" id="newprice"  name="Mprice" class="form-control" placeholder="Vehical Number">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Emloyee</label>
                <input type="text" id="Refilprice" name="Rprice" class="form-control" placeholder="Emloyee">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Mobile</label>
                <input type="text" id="empty" name="Eprice" class="form-control" placeholder="Mobile">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label"> select </label>
                <select id="disabledSelect" name="select" class="form-select">
                    <option>Disabled select</option>
                </select>
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
                    <th scope="col">Delivery area</th>
                    <th scope="col">Vehical Number</th>
                    <th scope="col">Emloyee</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>





        </tbody>

        </table>
        </div>


    </div>


</div>
{{--  <script>
    $(document).ready(function(){
        index();
        function index(){
            $.ajax({
                type:"GET",
                url:"inventory/index",
                dataType:"json",
                success:function(response){
                   // console.log(response.details);

                   $.each(response.details,function(key,data){
                    $('tbody').append(
                        `<tr>\
                            <th class="custom_id" >`+data.id+`</th>\
                            <td>`+data.product+`</td>\
                            <td>`+data.productcode+`</td>\
                            <td>`+data.newprice+`</td>\
                            <td>`+data.refilprice+`</td>\
                            <td>`+data.emptyprice+`</td>\


                            <td>
                                <a class="btn btn-success profile" ><i class="fa-regular fa-user"></i></a>
                               <a class="btn btn-danger delete"   > <i class="fa-regular fa-trash-can"></i></a>
                               <a class="btn btn-info bille" ><i class="fa-light fa-file-invoice"></i></a>

                            </td>\





                        </tr>`
                    );

                   });

                }

            });

        }











});
</script>  --}}




</body>

</html>

