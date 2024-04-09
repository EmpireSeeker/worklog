<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/assets/img/p1.png">
    <link rel="stylesheet" href="{{asset('assets/css/order.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orderlist</title>
</head>
<body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 mb-lg-5">
                <div class="overflow-hidden card table-nowrap table-card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Quote list</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="small text-uppercase bg-body text-muted">
                                <tr>
                                    <th>Name</th>
                                    <th>Destination</th>
                                    <th>Goods Name</th>
                                    <th>Color</th>
                                    <th>Quantity</th>

                                    {{-- <th class="text-end">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)

                  <tr>
                      <td><i class="positiveIcon fas fa-check"></i> {{ $order->name }}</td>
                      <td>{{ $order->destination }}
                        {{-- <td>{{ $order->phone }} --}}
                            <td>{{ $order->goods_name }}
                                <td>{{ $order->color }}
                                    <td>{{ $order->quantity }}




                      </td>

                  @endforeach


                                            </div>
                                        </div>
                                    </td>

                                            </div>
                                        </div>
                                    </td>

                                            </div>
                                        </div>
                                    </td>





                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
