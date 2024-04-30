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


    {{--  jquery  --}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
                <input type="text" id="edit_name" class="form-control" name="emp_name" placeholder="Employee nam">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">EPF No</label>
                <input type="text" id="edit_no"  name="epf_no" class="form-control" placeholder="EPF No">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">NIC</label>
                <input type="text" id="edit_nic" name="nic" class="form-control" placeholder="NIC">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Mobile</label>
                <input type="text" id="edit_mobile" name="mobile" class="form-control" placeholder="Mobile">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Address</label>
                <input type="text" id="edit_address" name="address" class="form-control" placeholder="Address">
            </div>
            <div class="mb-3" >
                <label for="disabledSelect" class="form-label"> Employee Type </label>
                <select id="disabledSelect" name="edit_employee" class="form-select">
                    <option>Employee type</option>
                </select>
            </div>



            <button type="submit" class="btn btn-outline-info" style="justify-content: flex-end;">save
                <i class="fa-regular fa-floppy-disk"></i>

            </button>

        </form>



    </div>
    @include('admin.emloyee.employeedata')


</div>



</body>

</html>
