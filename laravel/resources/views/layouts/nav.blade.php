<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
            </button>
            <a class="navbar-brand" href="#">Laravel</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li class="{{ (Request::is('auth/login') ? 'active' : '') }}"><a href="{{ url('auth/login') }}"><i
                                    class="fa fa-sign-in"></i> Login</a></li>
                    <li class="{{ (Request::is('auth/register') ? 'active' : '') }}"><a
                                href="{{ url('auth/register') }}">Register</a></li>
                @else
                    @if(Auth::check())
                        @if(Auth::user()->admin==1)
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


