<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Barroc-It</title>

</head>
<body>
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <p class="sr-only">Toggle Navigation</p>
                    </button>
                    <a class="navbar-brand" href="#">Laravel</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::guest())
                            <li class="{{ (Request::is('login') ? 'active' : '') }}"><a href="{{ url('login') }}"><i
                                            class="fa fa-sign-in"></i> Login</a></li>
                            <li class="{{ (Request::is('register') ? 'active' : '') }}"><a
                                        href="{{ url('register') }}">Register</a></li>
                        @else
                            @if(Auth::check())
                                @if(Auth::user()->name == 'Admin')
                                    <ul class="nav navbar-nav">
                                        <li class="{{ (Request::is('admin') ? 'active' : '') }}">
                                            <a href="{{ url('admin') }}"><i class="fa fa-home"></i> Dashboard</a>
                                        </li>
                                        <li class="{{ (Request::is('overview') ? 'active' : '') }}">
                                            <a href="{{ url('overview') }}">Articles</a>
                                        </li>
                                        <li class="{{ (Request::is('invoices') ? 'active' : '') }}">
                                            <a href="{{ url('invoices') }}">About</a>
                                        </li>
                                        <li class="{{ (Request::is('adminAppointments') ? 'active' : '') }}">
                                            <a href="{{ url('adminAppointments') }}">Contact</a>
                                        </li>
                                    </ul>

                                @elseif (Auth::user()->salesUser==2)
                                    <ul class="nav navbar-nav">
                                        <li class="{{ (Request::is('admin') ? 'active' : '') }}">
                                            <a href="{{ url('sales') }}"><i class="fa fa-home"></i> Dashboard</a>
                                        </li>
                                        <li class="{{ (Request::is('overview') ? 'active' : '') }}">
                                            <a href="{{ url('overview') }}">Projects</a>
                                        </li>
                                        <li class="{{ (Request::is('customers') ? 'active' : '') }}">
                                            <a href="{{ url('customers') }}">customers</a>
                                        </li>
                                        <li class="{{ (Request::is('invoices') ? 'active' : '') }}">
                                            <a href="{{ url('invoices') }}">Invoices</a>
                                        </li>
                                        <li class="{{ (Request::is('adminAppointments') ? 'active' : '') }}">
                                            <a href="{{ url('salesAppointments') }}">Appointments</a>
                                        </li>
                                    </ul>

                                @elseif (Auth::user()->financeUser==3)
                                    <ul class="nav navbar-nav">
                                        <li class="{{ (Request::is('finance') ? 'active' : '') }}">
                                            <a href="{{ url('finance') }}"><i class="fa fa-home"></i> Dashboard</a>
                                        </li>
                                        <li class="{{ (Request::is('overview') ? 'active' : '') }}">
                                            <a href="{{ url('overview') }}">Projects</a>
                                        </li>
                                        <li class="{{ (Request::is('customers') ? 'active' : '') }}">
                                            <a href="{{ url('customers') }}">customers</a>
                                        </li>
                                        <li class="{{ (Request::is('invoices') ? 'active' : '') }}">
                                            <a href="{{ url('invoices') }}">Invoices</a>
                                        </li>
                                        <li class="{{ (Request::is('adminAppointments') ? 'active' : '') }}">
                                            <a href="{{ url('financeAppointments') }}">Appointments</a>
                                        </li>
                                    </ul>

                                @elseif (Auth::user()->financeUser==3)
                                    <ul class="nav navbar-nav">
                                        <li class="{{ (Request::is('finance') ? 'active' : '') }}">
                                            <a href="{{ url('finance') }}"><i class="fa fa-home"></i>Dashboard</a>
                                        </li>
                                        <li class="{{ (Request::is('overview') ? 'active' : '') }}">
                                            <a href="{{ url('overview') }}">Projects</a>
                                        </li>
                                        <li class="{{ (Request::is('customers') ? 'active' : '') }}">
                                            <a href="{{ url('customers') }}">customers</a>
                                        </li>
                                        <li class="{{ (Request::is('invoices') ? 'active' : '') }}">
                                            <a href="{{ url('invoices') }}">Invoices</a>
                                        </li>
                                        <li class="{{ (Request::is('adminAppointments') ? 'active' : '') }}">
                                            <a href="{{ url('financeAppointments') }}">Appointments</a>
                                        </li>
                                    </ul>

                                @elseif (Auth::user()->developmentUser==4)
                                    <ul class="nav navbar-nav">
                                        <li class="{{ (Request::is('development') ? 'active' : '') }}">
                                            <a href="{{ url('development') }}"><i class="fa fa-home"></i>Dashbard</a>
                                        </li>
                                        <li class="{{ (Request::is('overview') ? 'active' : '') }}">
                                            <a href="{{ url('overview') }}">Projects</a>
                                        </li>
                                        <li class="{{ (Request::is('adminAppointments') ? 'active' : '') }}">
                                            <a href="{{ url('developmentAppointments') }}">Appointments</a>
                                        </li>
                                    </ul>
                                @endif
                            @endif
                            <li>
                                <a href="{{ url('auth/logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                            </li>
                    </ul>
                    </li>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

    <footer>

    </footer>

    <!-- JQuery / Java Script-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>