        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <span style="font-size: 20px; color: #3d3f41; font-weight: bold;">EPM System</span>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        @if(has_menu('dashboard'))
                        <li class="{{Request::is('admin') ? 'active':''}}">
                            <a href="{{ route('admin.home') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard
                            </a>
                        </li>
                        @endif
                        @if(has_menu('user_roles'))
                        <li class="has-sub {{Request::is('admin/role*') ? 'active':''}}">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-puzzle-piece"></i>User Roles
                                <span class="arrow {{Request::is('admin/role*') ? 'up':''}}">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" @if(Request::is('admin/role*')) style="display: block;" @endif>
                                @if(has_access('user_list_view'))
                                <li class="{{Request::is('admin/role/user-list') ? 'active':''}}">
                                    <a href="{{ route('admin.role.userList') }}">
                                        <i class="fas fa-tasks"></i>Users</a>
                                </li>
                                @endif
                                @if(has_access('role_list_view'))
                                <li class="{{Request::is('admin/role/list') ? 'active':''}}{{Request::is('admin/role/edit-role-access/*') ? 'active':''}}">
                                    <a href="{{ route('admin.role.list') }}">
                                        <i class="fas fa-tasks"></i>Roles & Permissions</a>
                                </li>
                                @endif
                                @if(has_access('menu_head_list_view'))
                                <li class="{{Request::is('admin/role/menu-head-list') ? 'active':''}}{{Request::is('admin/role/menu-head-edit/*') ? 'active':''}}">
                                    <a href="{{ route('admin.role.menuHeadList') }}">
                                        <i class="fas fa-tasks"></i>Menu Heads</a>
                                </li>
                                @endif
                                @if(has_access('menu_list_view'))
                                <li class="{{Request::is('admin/role/menu-list') ? 'active':''}}{{Request::is('admin/role/menu-edit/*') ? 'active':''}}">
                                    <a href="{{ route('admin.role.menuList') }}">
                                        <i class="fas fa-tasks"></i>Menus</a>
                                </li>
                                @endif
                                @if(has_access('create_role'))
                                <li class="{{Request::is('admin/role/add') ? 'active':''}}">
                                    <a href="{{ route('admin.role.add') }}">
                                        <i class="fas fa-plus"></i>Add New Role</a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif
                        @if(has_menu('employees'))
                        <li class="has-sub {{Request::is('admin/employee*') ? 'active':''}}">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Employees
                                <span class="arrow {{Request::is('admin/employee*') ? 'up':''}}">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" @if(Request::is('admin/employee*')) style="display: block;" @endif>
                                @if(has_access('employee_list_view'))
                                <li class="{{Request::is('admin/employee/list') ? 'active':''}}">
                                    <a href="{{ route('admin.employee.list') }}">
                                        <i class="fas fa-tasks"></i>All Employees</a>
                                </li>
                                @endif
                                @if(has_access('create_employee'))
                                <li class="{{Request::is('admin/employee/add') ? 'active':''}}">
                                    <a href="{{ route('admin.employee.add') }}">
                                        <i class="fas fa-plus"></i>Add New</a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif
                        @if(has_menu('projects'))
                        <li class="has-sub {{Request::is('admin/project*') ? 'active':''}}">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Projects
                                <span class="arrow {{Request::is('admin/project*') ? 'up':''}}">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list" @if(Request::is('admin/project*')) style="display: block;" @endif>
                                @if(has_access('project_list_view'))
                                <li class="{{Request::is('admin/project/list') ? 'active':''}}">
                                    <a href="{{ route('admin.project.list') }}">
                                        <i class="fas fa-tasks"></i>All Projects</a>
                                </li>
                                @endif
                                @if(has_access('create_project'))
                                <li class="{{Request::is('admin/project/add') ? 'active':''}}">
                                    <a href="{{ route('admin.project.add') }}">
                                        <i class="fas fa-plus"></i>Add New</a>
                                </li>
                                @endif
                            </ul>
                        </li>
                        @endif
                        @if(has_menu('project_assignment'))
                        <li class="{{Request::is('admin/assignment*') ? 'active':''}}">
                            <a href="{{ route('admin.assignment.list') }}">
                                <i class="fas fa-download"></i>Assign Projects
                            </a>
                        </li>
                        @endif
                        @if(has_menu('project_reports'))
                        <li class="{{Request::is('admin/report*') ? 'active':''}}">
                            <a href="{{ route('admin.report.list') }}">
                                <i class="fas fa-edit"></i>Project Reports
                            </a>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </aside>