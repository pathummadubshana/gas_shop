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
            <div class="d-flex p-3" >






         <form method="POST" action="{{ url('admin/employee') }}">
            @csrf




            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Employee name</label>
                <input type="text" id="emp_name" class="form-control" name="emp_name" placeholder="Employee nam">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">EPF No</label>
                <input type="text" id="epf_no"  name="epf_no" class="form-control" placeholder="EPF No">
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
            <div class="mb-3" >
                <label for="disabledSelect" class="form-label"> Employee Type </label>
                <select id="disabledSelect" name="employee" class="form-select">
                    <option>Employee type</option>
                </select>
            </div>



            <button type="submit" class="btn btn-outline-info" style="justify-content: flex-end;">Add
                <i class="fa-regular fa-floppy-disk"></i>

            </button>


                <button type="submit" class="btn btn-outline-info" id="update"  style="justify-content: flex-end;">Update
                    <i class="fa-regular fa-floppy-disk"></i>

                </button>



        </form>
        <!-- Modal -->
        <div class="modal fade" id="editmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit and update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Employee name</label>
                    <input type="text" id="name" class="form-control" name="name" placeholder="Employee nam">
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">EPF No</label>
                    <input type="text" id="no"  name="epf_no" class="form-control" placeholder="EPF No">
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">NIC</label>
                    <input type="text" id="nic_no" name="nic" class="form-control" placeholder="NIC">
                </div>

                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Mobile</label>
                    <input type="text" id="mobile_no" name="mobile" class="form-control" placeholder="Mobile">
                </div>
                <div class="mb-3">
                    <label for="disabledTextInput" class="form-label">Address</label>
                    <input type="text" id="address_up" name="address" class="form-control" placeholder="Address">
                </div>
                <div class="mb-3" >
                    <label for="disabledSelect" class="form-label"> Employee Type </label>
                    <select id="Select_id" name="employee" class="form-select">
                        <option>Employee type</option>
                    </select>
                </div>


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update">Update</button>
              </div>
            </div>
          </div>
        </div>



    </div>
    @include('admin.emloyee.employeedata')


</div>



</body>

</html>
