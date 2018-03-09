<nav class="navbar navbar-default" style="border-color: #999;">
    <div class="container-fluid">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand visible-xs" href="#">Menu</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <!-- class="active" -->
            <li><a href="/dashboard">Home</a></li>
            <li><a href="/dashboard/minecraft">Minecraft</a></li>
            <li><a href="/dashboard/andere">Andere</a></li>
            <li><a href="/">Ga naar home page</a></li>
            <li>    
            
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                </form>

                <!-- <a href="/">Log out</a> -->
        
            </li>
        </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>