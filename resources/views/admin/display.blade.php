<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>display</title>

    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="d-flex p-3">
        <table class="table table-bordered table-ligh">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">New price</th>
                    <th scope="col">Refil price</th>
                    <th scope="col">Empty price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">delete</th>
                </tr>
            </thead>
            @foreach ($displays as $product)

            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->product }}</td>
                <td>RS:{{ $product->productcode }}</td>
                <td>RS:{{ $product->newprice }}</td>
                <td>RS:{{ $product->refilprice }}</td>
                <td>RS:{{ $product->emptyprice }}</td>
                <td><a href="update">
                    <button>
                        <i class="fa-solid fa-pen-to-square"></i></button>

                </a></td>
                <td>


                    <form  action="{{ url('product/'.$product->id) }}" method="POST">
                    @csrf
                    @method("DELETE")

                    <button ><i class="fa-regular fa-trash-can"></i></button>

                </form>
            </td>



            </tr>

            @endforeach

        </table>
        </div>


</body>
</html>
