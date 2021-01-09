@extends('layouts.app')

@section('content')
<div class="container">
          <div class="container">
              <div class="container">
                <div class="card">
                    <div class="card-body">
                    <h1 class="card-title">Hai!</h1>
                    <br>
                    <p class="card-text" style="font-size: 20px;padding-left: 20px">Selamat Datang Supervisor</p>
                    <br>
                    </div>
                </div>
                <br>
                <br>
                <table class="table" style="text-align: center;">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIP</th>
                        <th scope="col">RPP</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>11800000</td>
                        <td>Matematika</td>
                        <td>
                            <button type="button" class="btn btn-warning">Cek</button>
                            <button type="button" class="btn btn-success">Terima</button>
                            <button type="button" class="btn btn-danger">Tolak</button>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>11800001</td>
                        <td>Bahasa Indonesia</td>
                        <td>
                            <button type="button" class="btn btn-warning">Cek</button>
                            <button type="button" class="btn btn-success">Terima</button>
                            <button type="button" class="btn btn-danger">Tolak</button>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>11800002</td>
                        <td>Bahasa Inggris</td>
                        <td>
                            <button type="button" class="btn btn-warning">Cek</button>
                            <button type="button" class="btn btn-success">Terima</button>
                            <button type="button" class="btn btn-danger">Tolak</button>
                        </td>
                        </tr>
                    </tbody>
                    </table>
              </div>
          </div>
      </div>
@endsection