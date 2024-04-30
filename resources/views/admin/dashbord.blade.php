<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <!-- Header -->
  <div class=" bg-warning text-dark p-2 " style="margin-bottom: 0%;">

        <!-- <i class="fa-solid fa-bars  " style="padding-left: 15%; color: aliceblue;"></i> -->



    <i class="fa-solid fa-user " style="padding-left: 75%; color:#807c7c; "></i>



  </div>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-bars  "></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#" >Gas shop</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="dashbord" class="sidebar-link">
                        <i class="fa-solid fa-bolt " ></i>
                        <span>Dashbord</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span>Product</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                    <li class="sidebar-item">
                            <a href="product" class="sidebar-link">Product </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Product price</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Product category</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-shop"></i>
                        <span>Purchesing Orde</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-truck"></i>
                        <span>Good Receive</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-truck-ramp-box"></i>
                        <span>Vehical Loding</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-file-invoice" ></i>
                        <span>Invoice</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                Two Links
                            </a>
                            <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 1</a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="#" class="sidebar-link">Link 2</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-warehouse"></i>
                        <span>Vehical Unloadingt</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-regular fa-calendar-xmark" ></i>
                        <span>Day End</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="./customer" class="sidebar-link">
                        <i class="fa-solid fa-user-group" ></i>
                        <span>Customere</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-arrow-turn-down" style="transform: rotate(90deg);"></i>
                        <span>Damege Return</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-regular fa-circle-dot"  ></i>
                        <span>Target</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-gear" ></i>
                        <span>Other</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>

        <div class="  main p-3">



            <div class="d-inline-flex ">
                <div style="display: flex; flex-direction: column;">
                    <div class="  border border-primary " style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;align-items: center;">
                    <i class="fa-solid fa-shop" style="color: #0d6efd; margin-left:10%; margin-top: 20%;"></i>
                        <p style="margin-left: 30%; margin-top:5%;color: #0d6efd; margin-bottom:5%;font-size: 0.875em">Full stock</p>



                    </div>
                    <div class="  border border-success  " style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                        <i class="fa-solid fa-calendar-days" style="color: #198754; margin-left:10%; margin-top: 20%;"></i>
                        <p style="margin-left: 30%; margin-top:5%;color: #198754; margin-bottom:5%;  font-size: 0.875em">Target this month</p>

                    </div>
                    <div class="  border border-danger" style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                        <i class="fa-solid fa-stopwatch"  style="color: #dc3545; margin-left:10%; margin-top: 20%;"></i>
                        <p style="margin-left: 30%; margin-top:5%;color: #dc3545; margin-bottom:5% ;font-size:0.875em">Sele's ref target</p>

                    </div>
                    <div class="  border border-danger" style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                        <i class="fa-solid fa-truck" style="color: #dc3545; margin-left:10%; margin-top: 20%;"></i>
                        <p style="margin-left: 30%; margin-top:5%;color: #dc3545; margin-bottom:5%;font-size:0.875em">Vehical Target</p>

                    </div>






                </div>

                <div style="display: flex; flex-direction: column; margin-left: 10%;">
                    <div class=" border border-dark" style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                        <i class="fa-solid fa-house" style="color: #212529; margin-left:10%; margin-top: 20%;"></i>
                        <p style="margin-left: 30%; margin-top:5%;color: #212529; margin-bottom:5%;font-size:0.875em">Total outstanding</p>

                    </div>

                    <div class="  border border-info" style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                        <i class="fa-solid fa-network-wired" style="color: #0dcaf0; margin-left:10%; margin-top: 20%;"></i>
                        <p style="margin-left: 30%; margin-top:5%;color: #0dcaf0; margin-bottom:5%; font-size:0.875em">Co-op outstanding</p>

                    </div>
                    <div class="  border border-success" style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                        <i class="fa-solid fa-notes-medical" style="color: #198754; margin-left:10%; margin-top: 20%;"></i>
                        <p style="margin-left: 30%; margin-top:5%;color: #198754; margin-bottom:5%; font-size:0.875em">Retail outstanding</p>



                    </div>
                </div>

                <div class=" border border-primary  " style="width: 50%; height: 50%; margin-left: 10%; border-radius: 10px;">

                    <p>Monthly sale summery</p>
                    <canvas id="myChart"></canvas>



                  </div>
            </div>






        </div>






        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'],
        datasets: [{
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          y: {
            beginAtTwo: true
          }
        }
      }
    });
  </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="{{asset('js/script.js')}}">

    </script>
</body>

</html>
