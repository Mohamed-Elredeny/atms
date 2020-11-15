<?php use Kreait\Firebase\Factory;

?>
<style>
    *{
        direction: ltr;
    }
</style>
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="direction: ltr;text-align: left">


                <!--Users -->
                <li class="nav-item"><a href="#"><i class="la la-home"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">Users</span>
                    </a>
                    <ul class="menu-content">
                        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                            <li class="nav-item"><a href="#"><i class="la la-home"></i>
                                    <span class="menu-title" data-i18n="nav.dash.main">Super Admins </span>
                                </a>
                                <ul class="menu-content">
                                    <li class="active"><a class="menu-item" href=""
                                                          data-i18n="nav.dash.ecommerce"> View All Super Admins</a>
                                    </li>
                                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة مسئول جديد
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#"><i class="la la-home"></i>
                                    <span class="menu-title" data-i18n="nav.dash.main">رؤساء الاقسام</span>
                                </a>
                                <ul class="menu-content">
                                    <li class="active"><a class="menu-item" href=""
                                                          data-i18n="nav.dash.ecommerce"> عرض كل رؤساء الاقسام</a>
                                    </li>
                                    <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">أضافة رئيس قسم جديد
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="#"><i class="la la-home"></i>
                                    <span class="menu-title" data-i18n="nav.dash.main">Employees </span>
                                </a>
                                <ul class="menu-content">
                                    <li class="active"><a class="menu-item" href="{{route('employees.index')}}"
                                                          data-i18n="nav.dash.ecommerce">  View All Employees</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('user.addUsersPage')}}" data-i18n="nav.dash.crypto">Add New Employee
                                        </a>
                                    </li>
                                    <!-- Employees Requests -->
                                    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                                        <li class="nav-item"><a href="#"><i class="la la-home"></i>
                                                <span class="menu-title" data-i18n="nav.dash.main">  View All Requests</span>
                                            </a>
                                            <ul class="menu-content">
                                                <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">Pending Requests
                                                    </a>
                                                </li>
                                                <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">Refused Requests
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- End of Employees Requests -->


                                    </ul>
                            </li>
                        </ul>


                        </ul>
                </li>

                <!--Departments -->
                <li class="nav-item"><a href="#"><i class="la la-home"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">الاقسام</span>
                        <ul class="menu-content">
                            <li class="active"><a class="menu-item" href=""
                                                  data-i18n="nav.dash.ecommerce"> عرض كل الاقسام</a>
                            </li>
                            <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">اضافة قسم جديد
                                </a>
                            </li>

                        </ul>
                    </a>
                </li>


        </ul>
    </div>
</div>
