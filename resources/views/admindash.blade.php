<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="{{asset('assets/css/css/styles.css')}}">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <div class="avatar">
            <a href="#"><i class="fas fa-user"></i></a>
          </div>
          <ul>
            <li class="active_link">
              <a href="#"><i class="fas fa-tint"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-angellist"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-archway"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-beer"></i></a>
            </li>
            <li>
              <a href="#"><i class="fas fa-book-reader"></i></a>
            </li>
            <div class="spacer"></div>
            <li>
              <a href="#"><i class="fas fa-cog"></i></a>
            </li>
            <li class="active_link">
              <a href="{{ route('welcome') }}"><i class="fas fa-power-off"></i></a>
            </li>
          </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div class="con">
            <br><br>
        <h3>WELCOME, <br> {{Auth::user()->name}}</h3>
    </div>

        <div id="page-content-wrapper">
          <div class="row">
            <div class="card card1">
              <div class="card1_title_wrapper">
                <h1 class="car1_title">Registered Customers</h1>
                <p class="car1_text">
                  $120,500
                  <span class="card1_span"
                    >+3.2%<i class="fas fa-arrow-up"></i
                  ></span>
                </p>
              </div>

                <table class="card1_table">
                    <thead class="card1_table_head">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>


                        </tr>
                    </thead>
                    <tbody class="card1_table_tbody">
                        @foreach ($users as $user)

                        <tr>
                            <td><i class="positiveIcon fas fa-check"></i> {{ $user->name }}</td>
                            <td>{{ $user->email }}

                            </td>

                        @endforeach

                    </tbody>
                </table>
            </div>


            <div class="card card2">
              <div class="clock" onclick="changeClock()">
                <div class="hour_wrapper">
                  <div class="hour" id="hr"></div>
                </div>
                <div class="minute_wrapper">
                  <div class="minute" id="mn"></div>
                </div>
                <div class="second_wrapper">
                  <div class="second" id="sc"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row row2">
            <div class="card card3">
              <div class="weather_title">
                <button class="btn btn-secondary">Istanbul</button>
                <span>16:05</span>
              </div>
              <div class="weather_image">

                <img src="{{asset('assets/img/images/cloud2.png')}}" alt="" />
                <span>Light Rain</span>
              </div>
              <div class="weather_bottom">
                <div class="left_numbers">
                  <p><i class="fas fa-wind"></i> 19km/h</p>
                  <p><i class="fas fa-tint"></i> 65%</p>
                  <p><i class="fas fa-sun"></i> 3.5hr</p>
                </div>
                <div class="right_degree">
                  <p>19&#176;</p>
                </div>
              </div>
            </div>
            <div class="card card4">
              <div class="card1_title_wrapper">
                <h1 class="car1_title">Todo List</h1>
                <p class="car1_text">
                  29 Todos
                  <span class="card1_span"
                    >+1.4%<i class="fas fa-arrow-up"></i
                  ></span>
                </p>
              </div>
              <div class="card1_table_wrapper">
                <table class="card1_table">
                  <thead class="card1_table_head">
                    <tr>
                      <th>Person</th>
                      <th>Title</th>
                      <th>Urgent</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody class="card1_table_tbody">
                    <tr>
                      <td><i class="positiveIcon fas fa-check"></i> John Doe</td>
                      <td>Operation Manager</td>
                      <td>Yes</td>
                      <td>
                        <button class="btn btn-secondary">Completed</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="negativeIcon fas fa-times"></i> Gonzales Higuan
                      </td>
                      <td>IT Stuff</td>
                      <td>No</td>
                      <td>
                        <button class="btn btn-primary">Processing</button>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <i class="positiveIcon fas fa-check"></i> Turgut Ozben
                      </td>
                      <td>Architecture</td>
                      <td>Yes</td>
                      <td>
                        <button class="btn btn-secondary">Completed</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
      </div>
      <script src="{{asset('assets/js/main12.js')}}"></script>

</body>
</html>
