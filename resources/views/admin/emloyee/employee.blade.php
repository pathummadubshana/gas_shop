<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>employee</title>
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






                <form method="POST" action="{{ url('/employeeadd') }}">
                    @csrf




                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Employee name</label>
                        <input type="text" id="emp_name" class="form-control" name="emp_name"
                            placeholder="Employee nam">
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">EPF Number</label>
                        <input type="text" id="epf_no" name="epf_no" class="form-control"
                            placeholder="EPF Number">
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">NIC</label>
                        <input type="text" id="nic" name="nic" class="form-control" placeholder="NIC">
                    </div>

                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Mobile</label>
                        <input type="text" id="mobile" name="mobile" class="form-control" placeholder="Mobile">
                    </div>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Address</label>
                        <input type="text" id="address" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label"> Employee Type </label>
                        <select id="disabledSelect" name="employee" class="form-select">
                            <option>select type</option>
                            <option>driver</option>
                            <option>seller</option>
                        </select>
                    </div>



                    <button type="submit" class="btn btn-outline-info" style="justify-content: flex-end;">Add
                        <i class="fa-regular fa-floppy-disk"></i>

                    </button>




                    </button>



                </form>




            </div>
            <div class="d-flex p-3">
                <table class="table table-bordered table-ligh">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">EPF</th>
                            <th scope="col">Type</th>
                            <th scope="col">NIC</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item['id'] }}</td>
                                <td>{{ $item['name'] }}</td>
                                <td>{{ $item['epfno'] }}</td>
                                <td>{{ $item['emptype'] }}</td>
                                <td>{{ $item['nic'] }}</td>
                                <td>
                                    <div class="d-inline-flex">
                                        <a class="btn btn-success edit" href="/edit/employee/{{ $item->id }}"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="/delete/employee/{{ $item->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger  "><i
                                                    class="fa-regular fa-trash-can "></i></button>
                                        </form>
                                    </div>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>



        </div>



</body>

</html>
