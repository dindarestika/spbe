@extends('layouts.master')
@section('content')
    @if (session('sukses'))
        <div class="alert alert-left alert-primary alert-dismissible fade show mb-3" role="alert">
            <span>{{ session('sukses') }}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Edit Data Sasaran</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <form action="/datasasaran/{{ $sasaran->id }}/update" method="POST">
                            {{ csrf_field() }}
                            <div class="mb-3">
                                <label class="form-label">Sasaran</label>
                                <textarea name="sasaran" class="form-control @error('sasaran') is-invalid @enderror"
                                    required rows="2">{{ $sasaran->sasaran }}</textarea>
                                @error('sasaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
