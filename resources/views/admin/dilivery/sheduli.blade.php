<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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




                <form method="POST" action="{{ url('sheduling/store') }}">
                    @csrf



                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Product</label>
                        <input type="text" class="form-control" name="product" placeholder="Product">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Date</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Contact</label>
                        <input type="text" name="contact" class="form-control" placeholder="Contact number">
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
                                <th scope="col">Date</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Action</th>

                            </tr>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->product }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->contact }}</td>

                                    <td>
                                        <div class="d-inline-flex ">

                                            <button class="edit_model btn btn-success profile" data-toggle="modal" data-target="#myModal" data-backdrop="false"
                                                value={{ $item->id }}><i
                                                    class="fa-solid fa-pen-to-square"></i></button>
                                            <form action="/shedule/delete/{{ $item->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger  "><i
                                                        class="fa-regular fa-trash-can "></i></button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </thead>
                        <tbody>





                        </tbody>

                    </table>
                </div>


            </div>


        </div>
        {{--  update modal  --}}

        <div class="modal" tabindex="-1" id="myModal" role="dialog "  >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update Sheduling</h5>

                    </div>
                    <div class="modal-body">
                        <form class="editform">
                            @csrf
                            @method('PUT')
                            <meta name="csrf-token" content="{{ csrf_token() }}">

                            <input type="hidden" id="itemID" name="id">

                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">products</label>
                                <input type="text" id="product_edit" name="product" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Date</label>
                                <input type="date" id="date_edit" class="form-control" name="date">
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Address</label>
                                <input type="text" id="address_edit" name="address" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Contact</label>
                                <input type="text" id="contact_edit" name="contact" class="form-control">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="update_btn btn btn-primary">Save changes</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>


        <script>
            $(document).ready(function() {
                $(document).on('click', '.edit_model', function(e) {
                    e.preventDefault();
                    var data_id = $(this).val();


                    $.ajax({

                        type: 'GET',
                        url: "/Sheduling/edit/" + data_id,

                        success: function(response) {
                            //console.log(response);
                            $('#itemID').val(data_id);
                            $('#product_edit').val(response.product);
                            $('#date_edit').val(response.date);
                            $('#address_edit').val(response.address);
                            $('#contact_edit').val(response.contact);
                            $('#myModal').modal('show');

                        }

                    });


                });

                $(document).on('click', '.update_btn', function(e) {
                    e.preventDefault();
                    var data_id = $("#itemID").val();
                    var data = {
                        "_token": "{{ csrf_token() }}",
                        'product': $('#product_edit').val(),
                        'date': $('#date_edit').val(),
                        'address': $('#address_edit').val(),
                        'contact': $('#contact_edit').val(),
                    }
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "PUT",
                        url: "/sheduling/update/" + data_id,
                        data: data,

                        dataType: "json",
                        success: function(response) {
                            console.log(response);
                            $('#myModal').modal('hide');
                            location.reload()

                        }

                    });


                });


            });
        </script>






</body>

</html>
