@extends('layouts.base')

@section('title', 'Page Title')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="row d-flex justify-content-between">
                        <h5 class="h3 mb-0 col-auto">Senarai RFx</h5>
                        <button type="button" class="btn btn-sm bg-gradient-primary col-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            RFx Baru
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis RFx</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kategori RFx</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tarikh RFx</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">status</th>
                                <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rfxes as $rfx)
                                <tr>
                                    <td>{{$rfx->jenis}}</td>
                                    <td>{{$rfx->kategori}}</td>
                                    <td>{{$rfx->tarikh}}</td>
                                    <td>
                                        @if ($rfx->status == "lulus")
                                        <span class="badge bg-gradient-success">Lulus</span>
                                        @else
                                        <span class="badge bg-gradient-danger">Gagal</span>
                                        @endif
                                    </td>
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
        <h5 class="modal-title" id="exampleModalLabel">Rfx Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/rfxes">
            @csrf
            <div class="form-group">
                <label>Jenis</label>
                <select class="form-control" name="jenis">
                    <option value="Sebutharga">Sebutharga</option>
                    <option value="Tender">Tender</option>
                    <option value="Rundingan terus">Rundingan terus</option>
                </select>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="kategori">
                    <option value="ICT">ICT</option>
                    <option value="M&E">M&E</option>
                    <option value="Sivil">Sivil</option>
                    <option value="Arkitek">Arkitek</option>
                    <option value="Landskap">Landskap</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tarikh</label>
                <input class="form-control" type="date" value="2020-01-01" name="tarikh">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="lulus">Lulus</option>
                    <option value="gagal">Gagal</option>
                </select>
            </div>

            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Tutup</button>
            <button type="submit" class="btn bg-gradient-primary">Simpan</button>
        </form> 
      </div>
    </div>
  </div>
</div>

@stop