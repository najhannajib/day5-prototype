@extends('layouts.base')

@section('title', 'Page Title')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row d-flex justify-content-between">
                        <h5 class="h3 mb-0 col-auto">Senarai Vendor</h5>
                        <button type="button" class="btn btn-sm bg-gradient-primary col-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Vendor Baru
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Vendor</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama syarikat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">kategori</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">skala</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">pengalaman (tahun)</th>
                                <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendors as $vendor)
                                <tr>
                                    <td>{{$vendor->idvendor}}</td>
                                    <td>{{$vendor->syarikat}}</td>
                                    <td>{{$vendor->kategori}}</td>
                                    <td>{{$vendor->skala}}</td>
                                    <td class="text-center">{{$vendor->pengalaman}}</td>
                                    <td class="align-middle">
                                        <a href="#!" class="text-danger font-weight-bold text-xs">
                                        <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vendor Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/vendors">
            @csrf
            <div class="form-group">
                <label>ID Vendor</label>
                <input class="form-control" type="text" name="idvendor">
            </div>
            <div class="form-group">
                <label>Nama Syarikat</label>
                <input class="form-control" type="text" name="syarikat">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input class="form-control" type="text" name="kategori">
            </div>
            <div class="form-group">
                <label>Skala</label>
                <select class="form-control" name="skala">
                    <option value="Besar">Besar</option>
                    <option value="Sederhana">Sederhana</option>
                    <option value="Kecil">Kecil</option>
                </select>
            </div>
            <div class="form-group">
                <label>Pengalaman (tahun)</label>
                <input class="form-control" type="number" name="pengalaman">
            </div>

            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary">Save changes</button>
        </form> 
      </div>
    </div>
  </div>
</div>

@stop