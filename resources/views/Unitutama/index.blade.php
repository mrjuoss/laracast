@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row">
          <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">
                  <div class="panel-heading">Daftar Unit Utama (Eselon I)</div>

                  <div class="panel-body">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama Unit Utama (Eselon I)</th>
                          <th>Akronim</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($unitutamas as $unit)
                          <tr>
                            <th scope="row">{{ $unit->id }}</th>
                            <td>{{ $unit->nama_unit}}</td>
                            <td>{{ $unit->akronim}}</td>
                            <td>Edit</td>
                            <td>Delete</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div>
          </div>
      </div>
  </div>

@endsection
