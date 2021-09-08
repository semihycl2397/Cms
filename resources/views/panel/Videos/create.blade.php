@extends('layout.app')
@section('content')
    @foreach($videos as $video)
        {{$video->name}}
    @endforeach
    <form action="{{route("post.video")}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="col-md-12" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title justify-content-center">
                        <i class="fa fa-cog mr-1"></i>
                        Video Ekle
                    </h3>
                    <hr>
                    <input type="file" name="type"class="form-control" id="customFile"required />
                    <div class="form-group">
                        <label for="name"><b>Video Adı:</b></label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Ekle</button>
                </div>
            </div>
        </div>

    </form>

                <!--Footer-part-->
                <div class="row-fluid">
                    <div id="footer" class="span12"> 2021 &copy; Semih Yücel. </a> </div>
                </div>
    <!--end-Footer-part-->
@endsection
