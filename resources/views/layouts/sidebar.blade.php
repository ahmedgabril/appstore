<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="text-center logo logo-light">
        <span class="logo-lg">
            <img src="/assets/images/logo.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="/assets/images/logo_sm.png" alt="" height="16">
        </span>
    </a>

    <!-- LOGO -->
    <a href="/dashbord" class="text-center logo logo-dark">
        <span class="logo-lg">
            <img src="/assets/images/logo-dark.png" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="/assets/images/logo_sm_dark.png" alt="" height="16">
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->

        <ul class="side-nav">
      
      
      
      @if (Auth()->user()->gobtitle == 'agent')
          
     
      
        <li class="side-nav-item">
                <a href="/" class="side-nav-link">
                <i class="mdi mdi-laptop"></i>
                   <span>  متجر التطبيقات </span>
                </a>
            </li>

                <li class="side-nav-item">
                    <a href="/agent_profile" class="side-nav-link">
                        <i class="mdi mdi-laptop"></i>
                        <span> الصفحه الرئسيه </span>
                    </a>
                </li>



                
                <li class="side-nav-item">
                    <a href="/agent_change_password" class="side-nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pass-fill" viewBox="0 0 16 16">
                            <path d="M10 0a2 2 0 1 1-4 0H3.5A1.5 1.5 0 0 0 2 1.5v13A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 12.5 0H10ZM4.5 5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1Zm0 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1Z"/>
                        </svg>


                        <span> تغير  كلمه السر </span>
                    </a>
                </li>

                @endif

                @if (Auth()->user()->gobtitle == 'createtor')

              
                <li class="side-nav-item">
                <a href="/" class="side-nav-link">
                <i class="mdi mdi-laptop"></i>
                   <span>  متجر التطبيقات </span>
                </a>
            </li>
              
                <li class="side-nav-item">
                    <a href="/createtor_profile" class="side-nav-link">
                        <i class="mdi mdi-laptop"></i>
                        <span> الصفحه الرئسيه </span>
                    </a>
                </li>

                <li class="side-nav-item">
                    <a href="createtor_change_password" class="side-nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pass-fill" viewBox="0 0 16 16">
                            <path d="M10 0a2 2 0 1 1-4 0H3.5A1.5 1.5 0 0 0 2 1.5v13A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 12.5 0H10ZM4.5 5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1Zm0 2h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1Z"/>
                        </svg>


                        <span> تغير  كلمه السر </span>
                    </a>
                </li>
                <li class="side-nav-item">

                
    
                </li>


            @endif

              @if (Auth()->user()->gobtitle == 'admin')
                  
              <li class="side-nav-item">
                <a href="/" class="side-nav-link">
                <i class="mdi mdi-laptop"></i>
                   <span>  متجر التطبيقات </span>
                </a>
            </li>


            <li class="side-nav-item">
                <a href="{{route('dashboard')}}" class="side-nav-link {{request()->is('/dashboard')?'active':''}}">
                <i class="uil-home-alt"></i>
                <span> لوحه التحكم </span>

                </a>
            </li>
       <hr/>





            @can('اداره التطبيقات')
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEcommerceapp" aria-expanded="false" aria-controls="sidebarEcommerceapp" class="side-nav-link">
                        <i class="mdi mdi-desktop-mac"></i>
                        <span> اداره التطبيقات </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerceapp">
                        <ul class="side-nav-second-level">
                            @can('الاقسام')
                                <li>
                                    <a href="/addcat">الاقسام</a>
                                </li>
                            @endcan

                                @can('التطبيقات')
                            <li>
                                <a href="{{route('handelapp')}}">التطبيقات </a>
                            </li>
                                @endcan


                        </ul>
                    </div>
                </li>



            @endcan


            @can('اداره المستخدمين')

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerceuser1" aria-expanded="false" aria-controls="sidebarEcommerceuser" class="side-nav-link">
                    <i class="mdi mdi-desktop-mac"></i>
                    <span>  اداره المستخدمين</span>
                    <span class="menu-arrow"></span>
                </a>

              
                <div class="collapse" id="sidebarEcommerceuser1">
                @can('اداره المسئولين')  
                <ul class="side-nav-second-level">
                       
                        <li>
                            <a href="/handelusers">اداره المسئولين </a>
                        </li>
                       



                    </ul>

                    @endcan
                </div>
            </li>
            @endcan




       
   @can('اداره الوكلاء')
         <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEcommerceuser" aria-expanded="false" aria-controls="sidebarEcommerceuser" class="side-nav-link">
                        <i class="mdi mdi-desktop-mac"></i>
                        <span>اداره الوكلاء</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerceuser">
                        <ul class="side-nav-second-level">


                            <li>
                                <a href="/handelagent">اداره الوكلاء</a>
                            </li>

                        </ul>
                    </div>
                </li>
 
   @endcan
              
                
        

            @can('اداره منشئي المحتوى')

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerceuser" aria-expanded="false" aria-controls="sidebarEcommerceuser" class="side-nav-link">
                    <i class="mdi mdi-desktop-mac"></i>
                    <span> اداره منشئي المحتوى</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerceuser">
                    <ul class="side-nav-second-level">


                            <li>
                                <a href="/handelcreator">اداره منشئي المحتوى </a>
                            </li>

                    </ul>
                </div>
            </li>
            @endcan

            @can('الصلاحيات والتراخيص')
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                    <i class=" mdi mdi-account-multiple"></i>
                    <span>  الصلاحيات والتراخيص </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        @can('اداراه الوظائف')
                        <li>
                            <a href="/handelrols">اداراه الوظائف </a>
                        </li>

                        @endcan
                    </ul>
                </div>
            </li>
            @endcan


            
            @can('الاعدات العامه')
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerceset1"
                   aria-expanded="false" aria-controls="sidebarEcommerceset1" class="side-nav-link">
                    <i class=" dripicons-gear noti-icon"></i>
                    <span>الاعدات العامه </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerceset1">
                    <ul class="side-nav-second-level">
                        @can('اعدات الموقع')
                        <li>
                            <a href="/handel_site_setting">اعدات الموقع </a>
                        </li>
                        @endcan

                       @can('اعدات السيو') 
                        <li>
                            <a href="/handelseo">اعدات السيو </a>
                        </li>
                    @endcan 
                @can('من نحن')
                        <li>
                            <a href="/contactme"> من نحن </a>
                        </li>
                  @endcan


                    </ul>
                </div>
            </li>
          @endcan
         
            @endif
        </ul>

        <!-- Help Box -->

        <!-- end Help Box -->
        <!-- End Sidebar -->
   
    </div>
    <!-- Sidebar -left -->
  
</div>
