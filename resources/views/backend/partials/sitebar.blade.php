<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">


    <div class="menu_section">




        <ul class="nav side-menu">
            <li> <a href=""><i class="fa fa-user"></i><span>{{ auth()->user()->fullname }}</span><span>
                        ({{ auth()->user()->type }})</span></a>
            </li>

            @if(auth()->user()->type=='admin')


            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>Dashboard </a>

            </li>
            <li>

                <a href="{{route('pos')}}"><i class="fa fa-cart-plus"></i>POS</a>


            </li>


            <li>
                <a><i class="fa fa-users"></i>Register<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.user')}}">Add Register</a></li>
                    <li><a href="{{route('user.manage')}}">Manage Register</a></li>


                </ul>
            </li>

            <li>
                <a><i class="fa fa-users"></i>Client<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{route('add.customer')}}">Add Client</a></li>
                    <li><a href="{{route('customer.manage')}}">Manage Client</a></li>


                </ul>
            </li>








            <li>
                <a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
            </li>


        </ul>

        </ul>
        @endif

        @if(auth()->user()->type=='register')

        <li>

            <a href="{{route('pos')}}"><i class="fa fa-cart-plus"></i>POS</a>


        </li>




        <li>
            <a><i class="fa fa-users"></i>Client<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="{{route('add.customer')}}">Add Client</a></li>
                <li><a href="{{route('customer.manage')}}">Manage Client</a></li>


            </ul>
        </li>









        <li>
            <a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
        </li>


        </ul>

        </ul>
        @endif

        @if(auth()->user()->type=='client')

        <li>

            <a href="{{route('pos')}}"><i class="fa fa-cart-plus"></i>POS</a>


        </li>






        


        <li>
            <a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
        </li>


        </ul>

        </ul>
        @endif


    </div>

</div>
