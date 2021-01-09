@extends('layouts.app')

@section('content')

        
<div class="container">
      <div class="container">
          <div class="container">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="/upload/proses" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card">
                <div class="card-body">
                <h1 class="card-title">Selamat Datang!</h1>
                <br>
                <p class="card-text" style="font-size: 20px;margin-left: 20px;">Silahkan upload materimu disini</p>
                <br>                       
                    <input class="upload" type="file" name="file" style="margin-left: 20px" />
                </div>
                <br>
                <input type="submit" value="Upload" class="btn btn-success" style="width: 10%;margin-left: 20px;">
                <br>
            </div>
            <br>
            <br>
          </form>
      </div>
  </div>
</div>
@endsection
