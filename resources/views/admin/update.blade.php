<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Updatet</title>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="p-3">

        <form method="POST" action="{{ url('product/'.$product->id) }}">
            @csrf
            @method('PATCH')


            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Product</label>
                <input type="text" id="product" class="form-control" name="product" placeholder="Product">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Product code</label>
                <input type="text" id="code" class="form-control" name="code" placeholder="Product code">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">New price</label>
                <input type="text" id="newprice"  name="Mprice" class="form-control" placeholder="New price">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Refill Price</label>
                <input type="text" id="Refilprice" name="Rprice" class="form-control" placeholder="Refill Price">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Empty Price</label>
                <input type="text" id="empty" name="Eprice" class="form-control" placeholder="Empty Price">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label"> select </label>
                <select id="disabledSelect" name="select" class="form-select">
                    <option>Disabled select</option>
                </select>
            </div>

            <button type="submit" class="btn btn-outline-info" style="justify-content: flex-end;">Add
                <i class="fa-regular fa-floppy-disk"></i>

            </button>

        </form>





    </div>


</body>
</html>
