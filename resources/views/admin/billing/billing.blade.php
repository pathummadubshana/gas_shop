<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill</title>
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
                <table class="table table-bordered table-ligh">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Item</th>
                            <th scope="col">qty</th>
                            <th scope="col">Type</th>
                            <th scope="col">price</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody >





                </tbody>

                </table>

            </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="invoice-title">
                            <h2>Invoice</h2><h3 class="pull-right">Order # 12345</h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6">
                                <address>
                                <strong>Billed To:</strong><br>
                                    John Smith<br>
                                    1234 Main<br>
                                    Apt. 4B<br>
                                    Springfield, ST 54321
                                </address>
                            </div>
                            <div class="col-xs-6 text-right">
                                <address>
                                <strong>Shipped To:</strong><br>
                                    Jane Smith<br>
                                    1234 Main<br>
                                    Apt. 4B<br>
                                    Springfield, ST 54321
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <address>
                                    <strong>Payment Method:</strong><br>
                                    Visa ending **** 4242<br>
                                    jsmith@email.com
                                </address>
                            </div>
                            <div class="col-xs-6 text-right">
                                <address>
                                    <strong>Order Date:</strong><br>
                                    March 7, 2014<br><br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Order summary</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <td><strong>Item</strong></td>
                                                <td class="text-center"><strong>Price</strong></td>
                                                <td class="text-center"><strong>Quantity</strong></td>
                                                <td class="text-right"><strong>Totals</strong></td>
                                            </tr>
                                        </thead>
                                        {{--  <tbody>
                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                            <tr>
                                                <td>BS-200</td>
                                                <td class="text-center">$10.99</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">$10.99</td>
                                            </tr>
                                            <tr>
                                                <td>BS-400</td>
                                                <td class="text-center">$20.00</td>
                                                <td class="text-center">3</td>
                                                <td class="text-right">$60.00</td>
                                            </tr>
                                            <tr>
                                                <td>BS-1000</td>
                                                <td class="text-center">$600.00</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">$600.00</td>
                                            </tr>
                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                                <td class="thick-line text-right">$670.99</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Shipping</strong></td>
                                                <td class="no-line text-right">$15</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center"><strong>Total</strong></td>
                                                <td class="no-line text-right">$685.99</td>
                                            </tr>
                                        </tbody>  --}}
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>.
        </div>



    </div>


    <script>
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
                                <td>`+data.product+`</td>\
                                <td>`+data.product+`</td>\
                                <td>`+data.Mprice+`</td>\

                                <td>
                                    <a class="btn btn-success profile" ><i class="fa-regular fa-user"></i></a>
                                   <a class="btn btn-danger delete"   > <i class="fa-regular fa-trash-can"></i></a>
                                   <a class="btn btn-info bille" ><i class="fa-solid fa-file-invoice"></i></a>

                                </td>\





                            </tr>`
                        );

                       });

                    }

                });

            }











    });
    </script>



</body>
</html>
