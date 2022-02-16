    <nav class="nav">
        <ul>
            <li><a href="#"><i class="fas fa-bars"></i></a>             
        <ul>
            <li><a href="{{ url('redirects') }}">Dashboard</a></li>
            <li><a href="{{ route('admin.profile') }}">Profile</a></li>
            <li><a href="#">Edit Profile</a></li>
            <li><a href="{{  route('logout') }}" onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">Logout</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
            </form>
         </li>
        </ul>    
            </li>
        </ul>
    </nav>
