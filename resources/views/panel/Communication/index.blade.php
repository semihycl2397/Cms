@extends('layout.app')
@section('content')
    <div id="content">
        <div id="content-header">
            <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Sample pages</a> <a href="#" class="current">Chat option</a> </div>
            <h1>Chat option</h1>
        </div>
        <div class="container-fluid"><hr>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box widget-chat">
                        <div class="widget-title"> <span class="icon"> <i class="icon-comment"></i> </span>
                            <h5>Let's do a chat</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <div class="chat-users panel-right2">
                                <div class="panel-title">
                                    <h5>Online Users</h5>
                                </div>
                                <div class="panel-content nopadding">
                                    <ul class="contact-list">
                                        <li id="user-Alex" class="online"><a href=""><img alt="" src="{{asset('img/demo/av1.jpg')}}" /> <span>Ömer</span></a></li>
                                        <li id="user-Linda"><a href=""><img alt="" src="{{asset('img/demo/av2.jpg')}}" /> <span>Hakan</span></a></li>
                                        <li id="user-John" class="online new"><a href=""><img alt="" src="{{asset('img/demo/av3.jpg')}}" /> <span>Mehmet</span></a></li>
                                        <li id="user-Mark" class="online"><a href=""><img alt="" src="{{asset('img/demo/av4.jpg')}}" /> <span>Samet</span></a></li>
                                        <li id="user-Maxi" class="online"><a href=""><img alt="" src="{{asset('img/demo/av5.jpg')}}" /> <span>Elif</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="chat-content panel-left2">
                                <div class="chat-messages" id="chat-messages">
                                    <div id="chat-messages-inner"></div>
                                </div>
                                <div class="chat-message well">
                                    <button class="btn btn-success">Send</button>
                                    <span class="input-box">
                <input type="text" name="msg-box" id="msg-box" />
                </span> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2021 &copy; Semih Yücel. </a> </div>
    </div>
    <!--end-Footer-part-->
@endsection
