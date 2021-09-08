@extends('layout.app')
@section('content')

    <div class="col-md-12" style="display: flex;flex-direction: column;justify-content: center;align-items: center">

        <form method="post" action="{{route('submit')}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlTextarea1"><b> Bilgi Alanı:</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Adres:</b></label>
                <input type="text" name="adress" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Telefon:</b></label>
                <input type="text" name="phone" class="form-control">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1"><b>Fax:</b></label>--}}
{{--                <input type="text" class="form-control">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1"><b>E-mail:</b></label>--}}
{{--                <input type="email" class="form-control">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1"><b>Facebook:</b></label>--}}
{{--                <input type="text" class="form-control">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1"><b>Twitter:</b></label>--}}
{{--                <input type="text" class="form-control">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1"><b>Instagram:</b></label>--}}
{{--                <input type="text" class="form-control">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1"><b>Youtube:</b></label>--}}
{{--                <input type="text" class="form-control">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="exampleInputEmail1"><b>Blog:</b></label>--}}
{{--                <input type="text" class="form-control">--}}
{{--            </div>--}}
            <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
        </form>

    </div>

@endsection

@section('footer')
    <div class="row-fluid">
        <div id="footer" class="span12"> 2021 &copy; Semih Yücel. </a> </div>
    </div>
@endsection
