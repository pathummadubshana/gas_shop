<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>data</title>
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





    <div class="container-fluid p-0">
        <div class="d-inline-flex">

            <div class="d-flex p-3">

                <table class="table table-bordered table-ligh">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">date</th>
                            <th scope="col">cutermer</th>
                            <th scope="col">product</th>
                            <th scope="col">Qty</th>
                            <th scope="col">send company</th>
                            <th scope="col">back wherehouse</th>
                            <th scope="col">return customer</th>
                            <th scope="col">area</th>


                        </tr>
                    </thead>
                    <tbody>
                        {{--  @isset($retundetails)


                        @foreach ($retundetails as $item)

                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->product }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ $item->return }}</td>
                            <td>{{ $item->return }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->name }}</td>

                        </tr>

                        @endforeach
                        @endisset





  --}}



                    </tbody>

                </table>
            </div>

        </div>

    </div>

    <script>

         $(document).ready(function(){
           index();
            function index(){
              $.ajax({
                type:"GET",
                url:"damage/index",
                dataType:"json",
                success:function(response){
                    //console.log(response.items);

                    $.each(response.items,function(key, item){
                        $('tbody').append(
                            `<tr>\
                                <th scope="row">`+item.id+`</th>\
                                <td>`+item.created_at+`</td>\
                                <td>`+item.name+`</td>\
                                <td>`+item.product+`</td>\
                                <td>`+item.qty+`</td>\
                                <td>`+item.return+`</td>\
                                <td>`+item.return+`</td>\
                                <td>`+item.name+`</td>\
                                <td>`+item.name+`</td>\






                            </tr>` );

                    });
                }

              });
            }
         });
    </script>


</body>

</html>
