
<nav class="navbar-inverse navbar-static-top " style="  position: fixed; width:100%">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="{{ url('/user') }}" style="margin-top:10px; font-family: sans-serif">
                 HERBARIUM
            </a>
        </div>
        <div class="collapse navbar-collapse" id="app-navbar-collapse" style="margin-top:10px">
            <ul class="nav nav-pills navbar-right">
                <li class="item">
                    <a class="navbar-link" href="{{url('/user')}}"> Home </a>
                </li>
                <li class="item dropdown">
                    <a class="navbar-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Herbarium <span class="caret"></span></a>
                    <div class="dropdown-menu dropdown-menu-right">

                        <a class ="dropdown-header" href="{{url ('user/herbarium/weed')}}">Weed Herbarium</a>
                        <a class="dropdown-header" href="{{url ('user/herbarium/forest')}}">Forest Herbarium</a>
                        <a class="dropdown-header" href="{{url ('user/herbarium/liken')}}">Liken Herbarium</a>
                        <a class="dropdown-header" href="{{url ('user/herbarium/briovitas')}}">Briovitas Herbarium</a>
                    </div>
                </li>
                <li class="item">
                    <a class="navbar-link" href="{{url('user/invasive')}}"> Invasive Alien Species </a>
                </li>
                <li class="item">
                    <a class="navbar-link" href="{{url('user/about')}}">About Us </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
