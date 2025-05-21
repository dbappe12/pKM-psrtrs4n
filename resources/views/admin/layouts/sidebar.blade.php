<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('img/logo_pkm.png') }}" alt="{{ Setting::getName('app_name') }}"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">MASTER APP</span>
</a>
<a href="{{ route('home') }}" target="_blank" class="brand-link d-flex align-items-center justify-content-center text-decoration-none">
    <i class="fas fa-rocket fa-fw me-2 text-success"></i>
    <span class="brand-text font-weight-light text-dark" style="font-size: 0.9rem;">Lihat Web</span>
</a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-legacy nav-compact"
                data-widget="treeview" role="menu" data-accordion="false">
                <!-- <li class="nav-item">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>@php $i = 1; @endphp
                @canany(['read user', 'read role', 'read permission'])
                    <li class="nav-header ml-2">App Settings</li>
                @endcanany

                @role(['superadmin','admin'])
                    <li
                        class="nav-item menu-is-opening {{ request()->is(['admin/user', 'admin/role', 'admin/permission', 'admin/setting']) ? 'menu-open' : '' }} ">
                        <a href=""
                            class="nav-link {{ request()->is(['admin/user', 'admin/role', 'admin/permission', 'admin/setting']) ? 'active' : '' }}">
                            <i class="fas fa-cog nav-icon"></i>
                            <p>Role Permission</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('read user')
                                <li class="nav-item">
                                    <a href="{{ route('user.index') }}"
                                        class="nav-link {{ request()->routeIs('user.index') ? 'active' : '' }}">
                                        <i class="fas fa-user nav-icon"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                            @endcan
                            @can('read role')
                                <li class="nav-item">
                                    <a href="{{ route('role.index') }}"
                                        class="nav-link {{ request()->routeIs('role.index') ? 'active' : '' }}">
                                        <i class="fas fa-user-cog nav-icon"></i>
                                        <p>Role</p>
                                    </a>
                                </li>
                            @endcan
                            @can('read permission')
                                <li class="nav-item">
                                    <a href="{{ route('permission.index') }}"
                                        class="nav-link {{ request()->routeIs('permission.index') ? 'active' : '' }}">
                                        <i class="fas fa-unlock nav-icon"></i>
                                        <p>Permission</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan

                <li class="nav-header ml-2">Master Aplikasi</li>
              
                    <li class="nav-item menu-is-opening {{ request()->is(['slider','pegawai']) ? 'menu-open' : '' }} ">
                        <a href="" class="nav-link {{ request()->is(['slider','pegawai']) ? 'active' : '' }}">
                            <i class="fas fa-warehouse nav-icon"></i>
                            <p>Data</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('slider.index') }}"
                                    class="nav-link {{ request()->routeIs('slider*') ? 'active' : '' }}">
                                    <i class="fas fa-warehouse nav-icon"></i>
                                    <p>Slider Foto </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pegawai.index') }}"
                                    class="nav-link {{ request()->routeIs('pegawai*') ? 'active' : '' }}">
                                    <i class="fa fa-youtube-play nav-icon"></i>
                                    <p>Youtube</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                <li class="nav-header ml-2">Sample</li>
              
                    <li class="nav-item menu-is-opening {{ request()->is(['form', 'pegawai']) ? 'menu-open' : '' }} ">
                        <a href="" class="nav-link {{ request()->is(['form', 'pegawai']) ? 'active' : '' }}">
                            <i class="fa fa-folder-open nav-icon"></i>
                            <p>Sample Data</p>
                            <i class="right fas fa-angle-left"></i>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('form.index') }}"
                                    class="nav-link {{ request()->routeIs('form*') ? 'active' : '' }}">
                                    <i class="fa fa-folder nav-icon"></i>
                                    <p>Form </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('pegawai.index') }}"
                                    class="nav-link {{ request()->routeIs('pegawai*') ? 'active' : '' }}">
                                    <i class="fa fa-table nav-icon"></i>
                                    <p>Datatables</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                -->

                  
             @foreach ($menu as $item)
                 @if ($item['type'] == 'header')
                  
                 @role(json_decode($item['permission']))
                                <li class="nav-header ml-2">{{ $item['title'] }}</li>
                        @endcan   
                 @elseif ($item['type'] == 'menu')
                
                 @role(json_decode($item['permission']))
                        <li class="nav-item">
                            <a href="{{ route( $item['url'])}}"
                                class="nav-link {{ request()->routeIs($item['active']) ? 'active' : '' }}">
                                <i class="nav-icon {{ $item['icon'] }}"></i>
                                <p>{{ $item['title'] }}</p>
                            </a>
                        </li>
                    @endcan      
                 @elseif ($item['type'] == 'tree')
                   
                    
                    @role(json_decode($item['permission']))
                        <li
                            class="nav-item menu-is-opening  {{ request()->routeIs(json_decode($item['aktif'])) ? 'menu-open' : '' }}">
                            <a href="" class="nav-link  {{ request()->routeIs(json_decode($item['aktif'])) ? 'active' : '' }}">
                                <i class="{{ $item['icon'] }} nav-icon"></i>
                                <p>{{ $item['title'] }}</p>
                                <i class="right fas fa-angle-left"></i>
                            </a>
                      
                            <ul class="nav nav-treeview">
                                @foreach ( $item['items'] as $menu)
                                @role(json_decode($menu['permission']))  
                               
                                    <li class="nav-item">
                                        <a href="{{ route( $menu['url'])}}"
                                            class="nav-link  {{ request()->routeIs(($menu['active'])) ? 'active' : '' }}">
                                            <i class="nav-icon {{ $menu['icon'] }}"></i>
                                            <p>{{ $menu['title'] }}</p>
                                        </a>
                                    </li>
                           
                                @endcan       
                                @endforeach
                            </ul>
                       
                        </li>
                      @endcan   
                    @endif
              @endforeach
         
              
        
              
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
