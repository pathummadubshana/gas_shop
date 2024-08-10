<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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



    <div class="container-fluid p-0 ">
        <div class="d-inline-flex">

            @include('sidenav')
            {{--  @include('display')
@include('insert')  --}}
            <div class="d-flex p-3">




                <form method="POST" action="{{ url('/order/placement') }}">
                    @csrf



                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Product</label>
                        <input type="text" id="product" class="form-control" name="product" placeholder="Product">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Product code</label>
                        <input type="text" id="code" class="form-control" name="code"
                            placeholder="Product code">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Qty</label>
                        <input type="text" id="qtya" name="qty" class="form-control" placeholder="qty">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Price</label>
                        <input type="text" id="pricea" name="price" class="form-control" placeholder="price">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Customer name</label>
                        <input type="text" id="Refilprice" name="name" class="form-control"
                            placeholder="Customer name">
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
                                <th scope="col">Price</th>
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
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->mobile }}</td>
                                    <td>
                                        <a href="/edit/tracking/{{ $item->id }}" class="btn btn-primary "><i
                                                class="fa-solid fa-sitemap"></i></a>
                                        <button class=" invoiceModal btn btn-info deleteProduct"
                                            value="{{ $item->id }}" data-toggle="modal"
                                            data-target="#invoiceModal" data-backdrop="false"> <i
                                                class="fa-solid fa-file-invoice"></i></button>
                                    </td>
                                </tr>
                            @endforeach





                        </tbody>

                    </table>
                </div>


            </div>


        </div>

        <script>
            $(document).ready(function() {

                $(document).on('click', '.invoiceModal', function(e) {
                    e.preventDefault();
                    var data_id = $(this).val();



                    $.ajax({
                        type: "GET",
                        url: '/bill/info/' + data_id,




                        success: function(response) {

                            $('#custom_name').text(response.name);
                            $('#address').text(response.address);
                            $('#date').text(response.created_at);
                            $('#item').text(response.product);
                            $('#qty').text(response.qty);
                            $('#price').text("Rs:" + response.price);


                            var p = response.price;
                            var q = response.qty;

                            var total = 0;
                            total = p * q;


                            $('#total').text("Rs:" + total);
                            $('#subtotal').text("Rs:" + total);
                            $('#final').text("Rs:" + total);







                            $('#myModal').modal('show');

                        }

                    });


                });






            });
        </script>

        <!-- Modal Invoice HTML -->
        <div class="modal fade" id="invoiceModal" tabindex="-1" role="dialog" aria-labelledby="invoiceModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="invoiceModalLabel">Invoice </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Bill To:</h6>
                                    <p id="custom_name"></p>
                                    <p id="address"></p>
                                </div>
                                <div class="col-md-6">
                                    <h6>Invoice Date:</h6>
                                    <p id="date"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td id="item"></td>
                                                <td id="qty"></td>
                                                <td id="price"></td>
                                                <td id="total"></td>
                                            </tr>

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="3">Subtotal:</th>
                                                <td id="subtotal"></td>
                                            </tr>

                                            <tr>
                                                <th colspan="3">Total:</th>
                                                <td id="final"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary"  id="print-btn">Download PDF</button>
                    </div>
                </div>
            </div>
        </div>


        <script >
            $(document).ready(function() {
                $('#print-btn').on('click', function() {
                  var modalBody = $('#invoiceModal .modal-body')[0];
                  var printContent = modalBody.innerHTML;
                  var printWindow = window.open('', '_blank');
                  //printWindow.document.write('<html><head><title>Modal Data</title></head><body>');
                  printWindow.document.write(printContent);
                  //printWindow.document.write('</body></html>');
                  printWindow.print();
                  printWindow.close();

                });
              });
        </script>



</body>

</html>
