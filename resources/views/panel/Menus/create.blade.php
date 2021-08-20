@extends('layout.app')
@section('content')
    <div class="col-md-12" style="display: flex;flex-direction: column;justify-content: center;align-items: center">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title justify-content-center">
                    <i class="fa fa-cog mr-1"></i>
                    Menü Oluştur
                </h3>
                <hr>
            </div>
            <select class="form-control">
                <option value="{{null}}"> Seçim Yapınız </option>
                <option>Varolan Menüye Ekle</option>
                <option>Yeni Menü Oluştur</option>

            </select>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="margin: 0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <ul style="margin: 0">
                            <li>{{  session()->get('message')  }}</li>
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <form>
            @csrf
            <div class="row mt-6 flex-column" style="display: flex;justify-content: space-between">
                <div class="form-group ml-3">
                    <label id="inputGroup-sizing-default" for="exampleInputEmail1">Blog</label>
                    <input type="text" name="" id="" aria-label="Instagram" class="form-control">
                </div>
                <div class="form-group ml-6">
                    <label id="inputGroup-sizing-default" for="exampleInputEmail1">Blog</label>
                    <input type="text" name="" id="" aria-label="Instagram" class="form-control">
                </div>

            </div>
            <button class="btn btn-success float-right">Oluştur</button>
        </form>

    </div>
    <hr>
    <!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2021 &copy; Semih Yücel. </a> </div>
    </div>
    <!--end-Footer-part-->
@endsection
