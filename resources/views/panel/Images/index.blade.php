@extends('layout.app')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Gallery</a> </div>
            <h1>Gallery</h1>
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-picture"></i> </span>
                            <h5>Images</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="thumbnails">
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" class="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a > <img src="{{asset('img/gallery/imgbox5.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox5.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox1.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox1.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a > <img src="{{asset('img/gallery/imgbox2.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox2.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox5.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox5.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox1.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox1.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox2.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox2.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox5.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox5.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox1.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox1.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox2.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox2.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span2"> <a> <img src="{{asset('img/gallery/imgbox5.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox5.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                            </ul>
                            <ul class="thumbnails">
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox1.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox1.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox2.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox2.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox5.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox5.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox1.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox1.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox2.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox2.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox5.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox5.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox1.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox1.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox2.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox2.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a class="thumbnail lightbox_trigger" href="{{asset('img/gallery/imgbox5.jpg')}}"> <img src="{{asset('img/gallery/imgbox5.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="img/gallery/imgbox3.jpg"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox1.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox1.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox2.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox2.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox5.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox5.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox1.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox1.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox2.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox2.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox3.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox3.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>
                                <li class="span1"> <a> <img src="{{asset('img/gallery/imgbox4.jpg')}}" alt="" > </a>
                                    <div class="actions"> <a title="" href="#"><i class="icon-pencil"></i></a> <a class="lightbox_trigger" href="{{asset('img/gallery/imgbox4.jpg')}}"><i class="icon-search"></i></a> </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2021 &copy; Semih Y??cel. </a> </div>
    </div>
    <!--end-Footer-part-->
@endsection
