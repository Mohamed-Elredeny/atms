<?php use Kreait\Firebase\Factory;
/*$factory = (new Factory())
    ->withDatabaseUri('https://swcc-housing.firebaseio.com/');
$database = $factory->createDatabase();
$services = $database->getReference('Services/')->getSnapshot()->getValue();

function SelServ($city){
    $factory = (new Factory())
        ->withDatabaseUri('https://swcc-housing.firebaseio.com/');
    $database = $factory->createDatabase();
    $services = $database->getReference('Services/'.$city)->getSnapshot()->getValue();
    if(@count($services) > 0 ){
        return $services;
    }else{
        return  false;
    }

}
function SelClinic($city){
    $factory = (new Factory())
        ->withDatabaseUri('https://swcc-housing.firebaseio.com/');
    $database = $factory->createDatabase();
    $services = $database->getReference('clinicCategory/'.$city)->getSnapshot()->getValue();
    if(@count($services) > 0 ){
        return $services;
    }else{
        return  false;
    }

}*/


?>
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content" style="text-align: RIGHT">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


                <!--Users -->
                <li class="nav-item"><a href="#"><i class="la la-home"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">المستخدمين</span>
                    </a>
                    <ul class="menu-content">
                        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                            <li class="nav-item"><a href="#"><i class="la la-home"></i>
                                    <span class="menu-title" data-i18n="nav.dash.main">المسئولين </span>
                                </a>
                                <ul class="menu-content">
                                    <li class="active"><a class="menu-item" href=""
                                                          data-i18n="nav.dash.ecommerce"> عرض كل المسئولين</a>
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
                                    <span class="menu-title" data-i18n="nav.dash.main">الموظفين </span>
                                </a>
                                <ul class="menu-content">
                                    <li class="active"><a class="menu-item" href="{{route('employees.index')}}"
                                                          data-i18n="nav.dash.ecommerce"> عرض كل الموظفين</a>
                                    </li>
                                    <li><a class="menu-item" href="{{route('employees.create')}}" data-i18n="nav.dash.crypto">اضافة موظف جديد
                                        </a>
                                    </li>
                                    <!-- Employees Requests -->
                                    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                                        <li class="nav-item"><a href="#"><i class="la la-home"></i>
                                                <span class="menu-title" data-i18n="nav.dash.main">عرض طلبات الموظفين</span>
                                            </a>
                                            <ul class="menu-content">
                                                <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">موظفين قيد الانتظار
                                                    </a>
                                                </li>
                                                <li><a class="menu-item" href="" data-i18n="nav.dash.crypto">موظفين مرفوضين
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
