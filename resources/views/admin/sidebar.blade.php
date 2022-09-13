<div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">
                            <!-- Sidenav Link (Dashboard)-->
                            <li class="nav-item mt-2">
                                <a class="nav-link active" href="/admin/main">
                                    <div class="nav-link-icon"><em class='bx bx-home'></em></div>
                                    Inicio
                                </a>
                            </li>
                            <!-- Sidenav Menu Heading (admin)-->
                            <div class="sidenav-menu-heading">Administracion</div>
                            <!-- Sidenav Link (Home)-->
                            <!--<a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#collapseConfiguration" aria-expanded="false"
                                aria-controls="collapseConfiguration">
                                <div class="nav-link-icon"><em class='bx bx-cog'></em></div>
                                Mostrador
                                <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                                        style="color:gray; font-size:16px;"></em></div>
                            </a>-->
                            <div class="collapse" id="collapseConfiguration" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <li class="nav-item">
                                    </li>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#collapsePlates" aria-expanded="false" aria-controls="collapsePlates">
                                <div class="nav-link-icon"><i class='bx bx-desktop'></i></div>
                                MOSTRADOR
                                <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                                        style="color:gray; font-size:16px;"></em></div>
                            </a>
                            <div class="collapse" id="collapsePlates" data-bs-parent="#accordionSidenav">
                                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/admin/Platos">MESAS</a>
                                    </li>
                                </nav>
                            </div>
                            <div>
                            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                data-bs-target="#collapseCarta" aria-expanded="false" aria-controls="collapseCarta">
                                <div class="nav-link-icon"><i class='bx bx-desktop'></i></div>
                                MENU A LA CARTA
                                <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                                        style="color:gray; font-size:16px;"></em></div>
                            </a>
                            </div>
                            <div>
                                <!--<a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                                    data-bs-target="#collapsePlates" aria-expanded="false"
                                    aria-controls="collapsePlates">
                                    <div class="nav-link-icon"><em class='bx bx-cog'></em></div>
                                    MESAS
                                    <div class="sidenav-collapse-arrow"><em class='bx bx-chevron-down'
                                            style="color:gray; font-size:16px;"></em></div>
                                </a>-->
                            </div>

                            <!-- Divider -->
                            <hr class="sidebar-divider">
                        </div>
                    </div>
                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Conectado como:</div>
                            <div class="sidenav-footer-title">{{Auth::user()->name}}</div>
                        </div>
                    </div>
                </nav>
            </div>