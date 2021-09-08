@extends('layout.app')
@section('content')
    <form action="{{route("post.image")}}" method="post" enctype="multipart/form-data">>
        @csrf
    <div class="col-md-12" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title justify-content-center">
                    <i class="fa fa-cog mr-1"></i>
                    Fotoğraf Ekle
                </h3>
                <hr>
                <input type="file" name="type" class="form-control" id="customFile" required/>
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Fotoğraf Adı:</b></label>
                    <input type="text" name="name" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Ekle</button>
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2021 &copy; Semih Yücel. </a> </div>
    </div>
            </div>
        </div>
    </div>
    </form>
    <!--end-Footer-part-->
@endsection
