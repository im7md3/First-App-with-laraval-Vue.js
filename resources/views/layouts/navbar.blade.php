<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm p-0">
    <div class="container">
        
            <a class="navbar-brand p-0" href="{{ url('/') }}">
                <img style="height: 100px;width:100px" class=" " src="{{ asset('img/logo.png') }}" alt="">
            </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul style="font-size: 16px" class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('domain.create')}}"  class="nav-link red">Submit your domain</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
