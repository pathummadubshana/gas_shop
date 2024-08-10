<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery tracking</title>
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




                <form method="POST" action="{{ url('/dilivery/track/store') }}">
                    @csrf



                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Product</label>
                        <input type="text"  value="{{ $delivery->product }}" class="form-control"
                            name="product" placeholder="Product">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Product code</label>
                        <input type="text" class="form-control" name="code"
                            value="{{ $delivery->code }}" placeholder="Product code">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Status</label>
                        <input type="text" id="newprice" name="status" class="form-control" placeholder="status">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Area</label>
                        <input type="text" id="newprice" name="area" class="form-control" placeholder="Area">
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
                                <th scope="col">Code</th>
                                <th scope="col">Status</th>
                                <th scope="col">area</th>
                                <th scope="col">Action</th>
                            </tr>

                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->product }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>{{ $item->area }}</td>
                                    <td>
                                        <div class="d-inline-flex ">


                                                <button class="edit_model btn btn-success profile" data-toggle="modal" data-target="#myModal" data-backdrop="false"
                                                value={{ $item->id }}><i
                                                class="fa-solid fa-pen-to-square"></i></button>
                                        <form action="/dilivery/track/delete/{{ $item->id }}" method="POST">
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

        <div class="modal" tabindex="-1" id="myModal" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update tacking</h5>

                    </div>
                    <div class="modal-body">
                        <form  class="editform">
                            @csrf
                            @method('PUT')
                            <meta name="csrf-token" content="{{ csrf_token() }}">

                            <input type="hidden" id="itemID" name="id">

                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Product</label>
                                <input type="text" id="product_edit"  class="form-control"
                                    name="product" placeholder="Product">
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Product code</label>
                                <input type="text" id="code_edit" class="form-control" name="code"
                                     placeholder="Product code">
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Status</label>
                                <input type="text" id="stattus_edit" name="status"
                                    class="form-control" placeholder="status">
                            </div>
                            <div class="mb-3">
                                <label for="disabledTextInput" class="form-label">Area</label>
                                <input type="text" id="area_edit" name="area"
                                    class="form-control" placeholder="Area">
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
                        url: "/tracking/edit/" + data_id,

                        success: function(response) {

                            $('#itemID').val(data_id);
                            $('#product_edit').val(response.product);
                            $('#code_edit').val(response.code);
                            $('#stattus_edit').val(response.status);
                            $('#area_edit').val(response.area);
                            $('#myModal').modal('show');

                        }

                    });


                });

                $(document).on('click','.update_btn',function(e){
                    e.preventDefault();
                    var data_id=$('#itemID').val();
                    var data={
                        "_token": "{{ csrf_token() }}",
                        'product': $('#product_edit').val(),
                        'code': $('#code_edit').val(),
                        'status': $('#stattus_edit').val(),
                        'area': $('#area_edit').val(),
                    }

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "PUT",
                        url: "/tracking/update/" + data_id,
                        data: data,

                        dataType: "json",
                        success: function(response) {
                            //console.log(response);
                            $('#myModal').modal('hide');
                            location.reload()

                        }

                    });

                });




            });
        </script>





</body>

</html>
