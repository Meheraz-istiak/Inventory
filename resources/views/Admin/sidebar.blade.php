 <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="{{route('admin.index')}}">
                            <img src="{{asset('admin/images/logo.png')}}" alt="" /><span>Focus</span></a></div>

                    <li>
                        <a href="{{route('admin.index')}}" >
                            <i class="ti-home"> </i> Dashboard
                            </a>

                    </li>

                     <li>
                        <a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>Employes <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('employee.index')}}">Add Employes</a></li>
                            <li><a href="chart-morris.html">view Employes</a></li>
                           </ul>

                    </li>


                    <li>
                        <a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Category <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="{{route('category.index')}}">Add category</a></li>
                            <li><a href="chart-morris.html">view category</a></li>
                           </ul>

                    </li>

                     <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i>Product <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="chart-flot.html">Add product</a></li>
                            <li><a href="chart-morris.html">view product</a></li>

                        </ul>

                    </li>

                </ul>
            </div>
        </div>
    </div>
