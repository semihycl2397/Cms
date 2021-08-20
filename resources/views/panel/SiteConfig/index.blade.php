@extends('layout.app')
@section('content')

    <div class="col-md-12" style="display: flex;flex-direction: column;justify-content: center;align-items: center">

        <form>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"> Bilgi Alanı:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adres:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefon:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Fax:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail:</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Facebook:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Twitter:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Instagram:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Youtube:</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Blog:</label>
                <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
        </form>

    </div>

@endsection

@section('footer')
    <div class="row-fluid">
        <div id="footer" class="span12"> 2021 &copy; Semih Yücel. </a> </div>
    </div>
@endsection
