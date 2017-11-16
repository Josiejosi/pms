    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                    <strong>Work</strong> Performance
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ url( 'dashboard' ) }}">
                        <i class="fa fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                @hasrole('Admin')
                <li>
                    <a href="{{ url( 'users' ) }}">
                        <i class="fa fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                @endhasrole
                
                @hasrole('Management')
                <li>
                    <a href="{{ url( 'rewards' ) }}">
                        <i class="fa fa-certificate"></i>
                        <p>Rewards</p>
                    </a>
                </li>
                @endhasrole

                @hasrole('Management')
                <li>
                    <a href="{{ url( 'tasks' ) }}">
                        <i class="fa fa-tasks"></i>
                        <p>Tasks</p>
                    </a>
                </li>
                @endhasrole

                @hasrole('Admin')
                <li>
                    <a href="{{ url( 'roles_and_permissions' ) }}">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <p>Roles</p>
                    </a>
                </li>
                @endhasrole

                @hasrole('Management')
                <li>
                    <a href="{{ url( 'reports' ) }}">
                        <i class="fa fa-line-chart"></i>
                        <p>Reports</p>
                    </a>
                </li>
                @endhasrole
                <li>
                    <a href="{{ url( 'profile' ) }}">
                        <i class="fa fa-user"></i>
                        <p>Profile</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>