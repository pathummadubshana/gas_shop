<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     {{--  jquery  --}}

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
                    <th scope="col">Area</th>
                    <th scope="col">Name</th>
                    <th scope="col">Type</th>
                    <th scope="col">NIC</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                {{--  @isset($details)


                @foreach ($details as $data)

                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->area }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->type }}</td>
                    <td>{{ $data->nic }}</td>
                    <td>{{ $data->mobile }}</td>
                    <td><a href="update">
                        <button>
                            <i class="fa-solid fa-pen-to-square"></i></button>

                    </a></td>
                    <td>


                        <form  action="{{ url('product/'.$data->id) }}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button ><i class="fa-regular fa-trash-can"></i></button>

                    </form>
                </td>



                </tr>

                @endforeach
                @endisset

  --}}









        </tbody>

        </table>
        </div>


        <script>
            $(document).ready(function(){
                index();
                function index(){
                    $.ajax({
                        type:"GET",
                        url:"custom/index",
                        dataType:"json",
                        success:function(response){
                           // console.log(response.details);

                           $.each(response.details,function(key,data){
                            $('tbody').append(
                                `<tr>\
                                    <th class="custom_id" >`+data.id+`</th>\
                                    <td>`+data.area+`</td>\
                                    <td>`+data.name+`</td>\
                                    <td>`+data.type+`</td>\
                                    <td>`+data.nic+`</td>\
                                    <td>`+data.mobile+`</td>\
                                    <td>
                                        <a class="btn btn-success edit" href="/customeredit"  ><i class="fa-solid fa-pen-to-square"></i></a>
                                       <a class="btn btn-danger delete"   > <i class="fa-regular fa-trash-can"></i></a>

                                    </td>\





                                </tr>`
                            );

                           });

                        }

                    });

                }

                $(document).on('click','.edit',function(e){
                    e.preventDefault();
                    var custom_id=$(this).closest('tr').find('.custom_id').text();
                    //alert(emp_id);
                    console.log(custom_id);

                  $.ajax({
                       type:"GET",
                      url:"/customeredit",
                      success:function(response){
                            console.log(response);

                           //if(response.status==404){
                             //  $('#success_message').html("");
                               // $('#success_message').addClass('alert alert-danger');
                               // $('#success_message').text(response.message);
                          // }else{
                             //  $('#name').val(response.emp.name)
                              // $('#no').val(response.emp.epfno)
                              // $('#nic_no').val(response.emp.nic)
                              // $('#mobile_no').val(response.emp.mobile)
                               // $('#address_up').val(response.emp.address)
                               //$('#Select_id').val(response.emp.emptype)
                         //  }



                     }

                   });



                   });




            });
        </script>
</body>
</html>
