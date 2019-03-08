           <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-normal">
                    {{Auth::user()->name}}
                </a>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">

                    @if(Auth::user()->role == 'admin')

                        <li class="nav-item active ">
                            <a class="nav-link" href="/home">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item active ">
                            <a class="nav-link" href="/admin/editProfile">
                                <p>Edit Profile</p>
                            </a>
                        </li>
                        
                    @else

                        <li class="nav-item active ">
                            <a class="nav-link" href="/home">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item active ">
                            <a class="nav-link" href="/user/editProfile">
                                <p>Edit Profile</p>
                            </a>
                        </li>

                    @endif

                        <li class="nav-item active-pro">
                            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="material-icons">unarchive</i>
                                <p> {{ __('Logout') }}</p>
                            </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>


                </ul>
            </div>