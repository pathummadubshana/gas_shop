<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashbord</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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

    <div class="container-fluid p-0">


        <div class="d-inline-flex">
            @include('sidenav')




                <div class="d-flex p-3">

                    <div class="col p-3">
                        <div class="  border border-primary "
                            style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;align-items: center;">
                            <i class="fa-solid fa-shop" style="color: #0d6efd; margin-left:10%; margin-top: 20%;"></i>
                            <p style="margin-left: 30%; margin-top:5%;color: #0d6efd; margin-bottom:5%;font-size: 0.875em">
                                Full stock</p>
                        </div>
                        <div class="  border border-success  "
                            style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                            <i class="fa-solid fa-calendar-days"
                                style="color: #198754; margin-left:10%; margin-top: 20%;"></i>
                            <p
                                style="margin-left: 30%; margin-top:5%;color: #198754; margin-bottom:5%;  font-size: 0.875em">
                                Target this month</p>

                        </div>
                        <div class="  border border-danger"
                            style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                            <i class="fa-solid fa-stopwatch" style="color: #dc3545; margin-left:10%; margin-top: 20%;"></i>
                            <p style="margin-left: 30%; margin-top:5%;color: #dc3545; margin-bottom:5% ;font-size:0.875em">
                                Seles ref target</p>

                        </div>
                        <div class="  border border-danger"
                            style="height: 100px; width: 200px; margin-left: 2%; margin-bottom:5%; border-radius: 10px;">
                            <i class="fa-solid fa-truck" style="color: #dc3545; margin-left:10%; margin-top: 20%;"></i>
                            <p style="margin-left: 30%; margin-top:5%;color: #dc3545; margin-bottom:5%;font-size:0.875em">
                                Vehical Target</p>

                        </div>

                    </div>
                    <div class="col p-3">
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
                    <div class=" col-7  p-3">
                        <div class=" border border-primary rounded-top rounded-bottom p-3" >

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
