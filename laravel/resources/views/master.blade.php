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
                    <a class="navbar-brand" href="#">Barroc-it</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                            @if(Auth::check())
                                @if(Auth::user()->name == 'Admin')
                                    <ul class="nav navbar-nav">
                                        <li>
                                            <a href="{{ url('dashboard') }}"><i class="fa fa-home"></i> Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="{{action('customerController@index')}}">Customers</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('invoices') }}">Projects</a>
                                        </li>
                                        <li class="{{ (Request::is('adminAppointments') ? 'active' : '') }}">
                                            <a href="{{ url('adminAppointments') }}">Contact</a>
                                        </li>
                                    </ul>

                                @elseif (Auth::user()->name == 'Development')
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

                                @elseif (Auth::user()->name == 'Finance')
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

                                @elseif (Auth::user()->name == 'Sales')
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

                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>

    <footer>

    </footer>

    <!-- JQuery / Java Script-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

        <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

        <script>
            $(function () {
                $( '#table' ).searchable({
                    striped: true,
                    oddRow: { 'background-color': '#f5f5f5' },
                    evenRow: { 'background-color': '#fff' },
                    searchType: 'fuzzy'
                });

                $( '#searchable-container' ).searchable({
                    searchField: '#container-search',
                    selector: '.row',
                    childSelector: '.col-xs-4',
                    show: function( elem ) {
                        elem.slideDown(100);
                    },
                    hide: function( elem ) {
                        elem.slideUp( 100 );
                    }
                })
            });
        </script>

        <script>
            $(function(){
                $('*[data-href]').click(function(){
                    window.location = $(this).data('href');
                    return false;
                });
            });
        </script>

</body>
</html>