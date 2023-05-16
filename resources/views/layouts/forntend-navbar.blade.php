<nav class="p-2 mb-4 navbar navbar-expand-lg navbar-light bg-light fixed-top " style=""
     dir="ltr">
            <div class="container-fluid">
                <a href="/" class="navbar-brand ">

                    <img src="{{asset('storage/'.\App\Helpers\helpers::siteset()->logo)}}" width="180" height="64" style="border-radius: 15px">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="mb-2 navbar-nav ms-auto mb-lg-0" dir="rtl" style="background-color: #464f5b;">
                        <li class="nav-item" >
 <a href="/"  class="mx-3 text-center nav-link me-0 {{request()->is('/')?'active':''}}" aria-current="page">
                        الرئيسيه
                            </a>
                        </li>
                        <li class="nav-item" >
 <a href="/allgame" class="mx-3 text-center nav-link me-2 {{request()->is('allgame')?'active':''}}" aria-current="page">
                    الالعاب
                            </a>
                        </li>

          <li class="nav-item" >
              <a href="/allapps" class="mx-3 text-center {{request()->is('allapps')?'active':''}} nav-link me-3 " aria-current="page">
                  التطبيقات
              </a>
          </li>

                        <li class="nav-item" >
 <a href="/contact-us" class="mx-3 text-center {{request()->is('contact')?'active':''}} nav-link me-3" aria-current="page">
                      من نحن
                            </a>
                        </li>
    


                        <li class="mx-5 text-center nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                جميع الاقسام
                            </a>
                            <ul class="dropdown-menu text-end">
                                @php
                                $con =0;
                                @endphp
                               @forelse(\App\Helpers\helpers::getdata() as $data)
                                    <li><a class="dropdown-item" href="/catapp/{{$data->id}}">

                                            {{$data->catname}} </a></li>

                                @empty
                                    <li ><a class="dropdown-item text-danger" href="#">   لاتوجد اي بيانات  حاليا </a></li>

                                @endforelse
                            </ul>
                        </li>
                           <li class="nav-item" >
                          <a href="#" class="mx-4 text-center nav-link me-2" aria-current="page" data-bs-toggle="modal" data-bs-target="#scrollable-modal">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                          </a>
                      </li>

                    </ul>

                </div>
            </div>


        </nav>
<livewire:search/>
