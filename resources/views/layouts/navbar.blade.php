<div class="navbar-custom">
                        <ul class="mb-0 list-unstyled topbar-menu float-start">




                   






                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="/assets/img/1.jpg" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{ Auth::user()->name }}</span>
                                          

                                        @if (Auth()->user()->gobtitle== 'admin')
                                        <span class="account-position">{{ implode("-", Auth::user()->getRoleNames()->toArray())}}</span>
                                            
                                        @endif

                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="m-0 text-overflow">Welcome ! {{ Auth::user()->name }}</h6>
                                    </div>

                                    <!-- item-->
                                    @if (Auth()->user()->gobtitle == 'admin')
                                    <a href="{{route('profile.edit')}}" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-circle me-1"></i>
                                        <span>الملف الشخصي</span>
                                    </a>
                                    @endif
                                       @can('الاعدادات')
                                    <!-- item-->
                                    <a href="/settings" class="dropdown-item notify-item">
                                        <i class="mdi mdi-account-edit me-1"></i>
                                        <span>الاعدادات</span>
                                    </a>
                                    @endcan

                                

                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="route('logout')" class="dropdown-item notify-item"   onclick="event.preventDefault();
                                                this.closest('form').submit();"


                            >
                                        <i class="mdi mdi-logout me-1"></i>


                          <spav>تسجيل الخروج</spav>

                            </a>
                        </form>





                                </div>
                            </li>

                        </ul>


                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>



             
                        </div>
                    </div>
