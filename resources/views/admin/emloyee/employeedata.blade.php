<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{--  jquery  --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
    crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

</head>
<body>


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

              {{--  @foreach ( $employee as $employee )

            <tr>
                <th scope="row">{{ $employee ->id }}</th>
                <td>{{ $employee ->area }}</td>
                <td>{{ $employee ->name }}</td>
                <td>{{ $employee ->type }}</td>
                <td>{{ $employee ->nic }}</td>
                <td>{{ $employee ->mobile }}</td>
                <td><a href="update">
                    <button>
                        <i class="fa-solid fa-pen-to-square"></i></button>

                </a></td>
                <td>


                    <form  action="{{ url('product/'.$employee ->id) }}" method="POST">
                    @csrf
                    @method("DELETE")

                    <button ><i class="fa-regular fa-trash-can"></i></button>

                </form>
            </td>



            </tr>

            @endforeach  --}}
        </tbody>

        </table>
        </div>
        <!-- Button trigger modal -->




        <script>

            $(document).ready(function(){
              index();
               function index(){
                 $.ajax({
                   type:"GET",
                   url:"emp/index",
                   dataType:"json",
                   success:function(response){
                       //console.log(response.items);

                       $.each(response.data,function(key, item){
                           $('tbody').append(
                               `<tr>\
                                   <th class='emp_id'>`+item.id+`</th>\
                                   <td>`+item.name+`</td>\
                                   <td>`+item.epfno+`</td>\
                                   <td>`+item.type +`</td>\
                                   <td>`+item.nic+`</td>\
                                   <td>
                                   <a class="btn btn-success edit "value="`+item.id+`""  ><i class="fa-solid fa-pen-to-square"></i></a>
                                  <a class="btn btn-danger delete"  value="`+item.id+`" data-token="{{ csrf_token() }}"> <i class="fa-regular fa-trash-can"></i></a>

                               </td>\


                               </tr>` );

                       });
                   }

                 });
               }

               //edit funtion

               $(document).on('click','.edit',function(e){
                e.preventDefault();
                var emp_id=$(this).closest('tr').find('.emp_id').text();
                //alert(emp_id);
                //console.log(emp_id);
              $('#editmodel').modal('show');
                $.ajax({
                    type:"GET",
                    url:"/edit_emp/"+emp_id,
                   success:function(response){
                        console.log(response);

                       if(response.status==404){
                           $('#success_message').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);
                       }else{
                           $('#name').val(response.emp.name)
                           $('#no').val(response.emp.epfno)
                            $('#nic_no').val(response.emp.nic)
                           $('#mobile_no').val(response.emp.mobile)
                            $('#address_up').val(response.emp.address)
                           $('#Select_id').val(response.emp.emptype)
                       }



                   }

                });



               });

               $(document).on('click','.update',function(e){
                 e.preventDefault();
                 var emp_id=$(this).closest('tr').find('.emp_id').text();
                 var data = {
                   'name':  $('#name').val(),
                   'epfno': $('#no').val(),
                  'nic': $('#nic_no').val(),
                  'mobile':$('#mobile_no').val(),
                  'address': $('#address_up').val(),
                   'emptype': $('#Select_id').val(),



                 }

                 $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                   }
               });
                 $.ajax({
                    type:"PUT",
                    url:"update_employee/"+emp_id,
                    data:data,
                    dataType:"json",
                    success:function(response){
                       console.log(response);
                       // index();
                       $('#editmodel').modal('hide');
                  }

                });

              });

              //delete funtion

               $(document).on('click' ,'.delete', function(e){
                e.preventDefault();
                var emp_id=$(this).closest('tr').find('.emp_id').text();
              //alert(emp_id);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });


                $.ajax({
                    type:"DELETE",
                    url:"delete_emp/"+emp_id,


                    success:function(response){
                       console.log(response);

                  }

                });










              });


            });



       </script>


</body>
</html>
