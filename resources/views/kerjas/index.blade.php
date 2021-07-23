@extends('layouts.base')

@section('title', 'Page Title')

@section('content')

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card widget-calendar">
                <!-- Card header -->
                <div class="card-header p-3 pb-0">
                <h6 class="mb-0">Calendar</h6>
                <div class="d-flex">
                    <div class="p text-sm font-weight-bold mb-0 widget-calendar-day"></div>
                    <span>,&nbsp;</span>
                    <div class="p text-sm font-weight-bold mb-1 widget-calendar-year"></div>
                </div>
                <hr class="horizontal dark mb-0">
                </div>
                <!-- Card body -->
                <div class="card-body p-3">
                <div data-toggle="widget-calendar"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
        <div class=" card">
        <div class=" card-header"><h5 class=" h3 mb-0">Senarai kerja</h5></div>

        <div class=" card-body p-0">
          <ul class=" list-group list-group-flush" data-toggle="checklist">
          @foreach ($kerjas as $kerja)
            <li
              class=" checklist-entry list-group-item flex-column align-items-start py-4 px-4"
            >
              <div class=" checklist-item checklist-item-success">
                <div class=" checklist-info">
                  <h5 class=" checklist-title mb-0">{{$kerja->perkara}}</h5>

                  <small> Tarikh: {{$kerja->tarikh}} </small>
                  <small> Waktu: {{$kerja->masa}}</small>
                </div>

                <div>
                  <div
                    class=" custom-control custom-checkbox custom-checkbox-primary"
                  >
                    <input
                      class=" custom-control-input"
                      id="chk-todo-task-1"
                      type="checkbox"
                    />

                    <label class=" custom-control-label" for="chk-todo-task-1">
                    </label>
                  </div>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
          <button type="button" class="btn btn-lg w-100 bg-gradient-primary col-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Kerja Baru
          </button>
        </div>
      </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kerja Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/kerjas">
            @csrf
            <div class="form-group">
                <label>Perkara</label>
                <input class="form-control" type="text" name="perkara">
            </div>
            <div class="form-group">
                <label>Tarikh</label>
                <input class="form-control" type="date" value="2020-01-01" name="tarikh">
            </div>
            <div class="form-group">
                <label>Masa</label>
                <input class="form-control" type="time" value="10:30:00" name="masa">
            </div>

            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn bg-gradient-primary">Save changes</button>
        </form> 
      </div>
    </div>
  </div>
</div>

@stop
