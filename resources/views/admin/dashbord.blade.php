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

                <div class="flex">
                    <div class="card-group ">
                        <div class="m-3 " >
                            <div class="card border-primary mb-3" style="max-width: 18rem;  ">
                                <div class="card-header">Header</div>
                                <div class="card-body text-primary">
                                    <i class="fa-solid fa-shop " style="color: #0d6efd; "></i>
                                    <h5 class="card-title">Full Stock</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the cards content.</p>
                                </div>
                            </div>

                        </div>



                        <div class="m-3 ">
                            <div class="card border-secondary mb-3" style="max-width: 18rem;  ">
                                <div class="card-header">Header</div>
                                <div class="card-body text-secondary">
                                    <i class="fa-solid fa-calendar-days" style="color: #6c757d; "></i>
                                    <h5 class="card-title">Secondary card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the cards content.</p>
                                </div>
                            </div>

                        </div>

                        <div class="m-3">
                            <div class="card border-success mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body text-success">
                                    <i class="fa-solid fa-stopwatch" style="color: #198754;"></i>
                                    <h5 class="card-title">Success card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the cards content.</p>
                                </div>
                            </div>

                        </div>
                        <div class="m-3">
                            <div class="card border-danger mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body text-danger">
                                    <i class="fa-solid fa-truck" style="color: #dc3545;"></i>
                                    <h5 class="card-title">Danger card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the cards content.</p>
                                </div>
                            </div>


                        </div>
                        <div class="m-3">

                        <div class="card border-warning mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body text-warning">
                                <i class="fa-solid fa-house" style="color: #ffc107; "></i>
                                <h5 class="card-title">Warning card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the cards content.</p>
                            </div>
                        </div>

                        </div>

                        <div class="m-3">

                        <div class="card border-info mb-3" style="max-width: 18rem;">
                            <div class="card-header">Header</div>
                            <div class="card-body text-info">
                                <i class="fa-solid fa-network-wired" style="color: #0dcaf0;"></i>
                                <h5 class="card-title">Info card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk
                                    of the cards content.</p>
                            </div>
                        </div>

                        </div>

                        <div class="m-3">
                            <div class="card border-dark mb-3" style="max-width: 18rem;">
                                <div class="card-header">Header</div>
                                <div class="card-body text-dark">
                                    <i class="fa-solid fa-notes-medical" style="color: #212529;"></i>
                                    <h5 class="card-title">Dark card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk
                                        of the cards content.</p>
                                </div>
                            </div>

                        </div>








                    </div>



                </div>
            </div>

        </div>
        {{--  <div class=" col-7  p-3">
                    <div class=" border border-primary rounded-top rounded-bottom p-3">

                        <p>Monthly sale summery</p>
                        <canvas id="myChart"></canvas>



                    </div>
                </div>  --}}





    </div>






    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '12', '13', '14', '15', '16', '17',
                    '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'
                ],
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
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
