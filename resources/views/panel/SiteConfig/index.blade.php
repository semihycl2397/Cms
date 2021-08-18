@extends('layout.app')
@section('content')
<body>

<div class="container">
    <div class="container">
        <form>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="3" id=""></textarea>

        <div class="form-group">
            <label for="usr">Adres:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
        <div class="form-group">
            <label for="usr">Telefon:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
        <div class="form-group">
            <label for="usr">Fax:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
        <div class="form-group">
            <label for="usr">E-mail:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
        <div class="form-group">
            <label for="usr">Facebook:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
        <div class="form-group">
            <label for="usr">Twitter:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
        <div class="form-group">
            <label for="usr">Instagram:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
        <div class="form-group">
            <label for="usr">Youtube:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
        <div class="form-group">
            <label for="usr">Blog:</label>
            <input type="text" class="form-control" rows="3" id="">
        </div>
            </div>
        </form>
    </div>
</div>
<button type="button" class="btn btn-primary">Değişikleri Kaydet</button>
</body>
</html>

<!--Footer-part-->
    <div class="row-fluid">
        <div id="footer" class="span12"> 2021 &copy; Semih Yücel. </a> </div>
    </div>
    <!--end-Footer-part-->
@endsection
