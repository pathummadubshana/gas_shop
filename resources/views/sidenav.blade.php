<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>





        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-bars  "></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Gas shop</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/" class="sidebar-link">
                        <i class="fa-solid fa-bolt "></i>
                        <span>Dashbord</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/product" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Product</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/product" class="sidebar-link">Product price</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Product category</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-shop"></i>
                        <span>Inventory Management</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/inventory" class="sidebar-link">Gas inventory</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/supplier" class="sidebar-link">Supplier</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/stock" class="sidebar-link">Stock</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/inventory/report" class="sidebar-link">Report</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-truck"></i>
                        <span>Order</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="/fulfillment" class="sidebar-link">Fulfill</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/placement" class="sidebar-link">Placement</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="/trackingdata" class="sidebar-link">Tracking</a>
                        </li>

                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="/delivery/lode" class="sidebar-link">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                        <span>Vehical Loding</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/bill" class="sidebar-link">
                        <i class="fa-solid fa-file-invoice"></i>
                        <span>Vehical Loding</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-warehouse"></i>
                        <span>Vehical Unloadingt</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-regular fa-calendar-xmark"></i>
                        <span>Day End</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./customer" class="sidebar-link">
                        <i class="fa-solid fa-user-group"></i>
                        <span>Customere</span>
                    </a>



                </li>
                <li class="sidebar-item">
                    <a href="./return" class="sidebar-link">
                        <i class="fa-solid fa-arrow-turn-down" style="transform: rotate(90deg);"></i>
                        <span>Damege Return</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fa-regular fa-circle-dot"></i>
                        <span>Target</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="./vehcaltarget" class="sidebar-link">Vehical Target</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Emlopyee</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-gear"></i>
                        <span>Other</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Vehical</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="./employee" class="sidebar-link">Emlopyee</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>






















    <script src="{{asset('js/script.js')}}">

    </script>
</body>

</html>
