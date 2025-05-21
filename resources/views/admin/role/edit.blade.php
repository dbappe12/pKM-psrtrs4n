@extends('admin.layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('template/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('plugins/flatpicker/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatable/dataTables.checkboxes.css') }}">
@endpush
@section('content')
    <style>

    </style>
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <a href="#" class="btn btn-sm btn-primary" id="btn_tambah"><i
                                            class="fas fa-plus"></i> Tambah harga</a>
                                    {{-- <a href="#" class="btn btn-sm btn-warning" id="btn_pengaturan_harga"><i
                                            class="fas fa-tools"></i> Pengaturan Harga</a> --}}
                                    <a style="display: none" href="#" class="btn btn-sm btn-danger"
                                        id="btn_hapus_masal"><i class="fas fa-trash"></i> Hapus Masal</a>
                                </h3>
                            </div>
                            <div class="card-body">
                            <form action="{{ route('role.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <x-input placeholder="Role Name" id="name" label="Name" value="{{ $role->name }}"
                            required="true" />
                        <x-input placeholder="Role Description" id="desc" label="Description" required="false"
                            value="{{ $role->name }}" />
                        <div class="form-group">
                            <label>Guard</label>
                            <select name="guard_name" class="form-control">
                                <option value="web">web</option>
                                <option value="api">api</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="border-top my-3"></div>
                <div class="card-body">
                    <div class="col-12">
                        <label>Permissions</label>
                    </div>
                    <div class="row">
                        @foreach ($data->get() as $item)
                            <div class="col-lg-3 col-md-6 col-sm-2">
                                <div class="card">
                                    <div style="font-weight: bold" class="card-header">
                                        <div class="d-flex">
                                            <h5 class=" mr-auto p-2">{{ $item->name }}</h5>
                                            <div class="p-0">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            @if ($role->name == 'superadmin')
                                                @foreach ($item->permissions as $item2)
                                                    <div class="custom-control custom-checkbox">
                                                        <input  checked disabled
                                                            class="custom-control-input" type="checkbox"
                                                            id="customCheckbox-{{ $item2->id }}"
                                                            value="{{ $item2->name }}" name="permissions[]">
                                                        <label for="customCheckbox-{{ $item2->id }}"
                                                            class="custom-control-label">{{ $item2->name }}</label>
                                                    </div>
                                                @endforeach
                                            @else
                                                @foreach ($item->permissions as $item2)
                                                    <div class="custom-control custom-checkbox">
                                                        <input @if (in_array($item2->name, $role->permissions->pluck('name')->toArray())) checked @endif
                                                            class="custom-control-input" type="checkbox"
                                                            id="customCheckbox-{{ $item2->id }}"
                                                            value="{{ $item2->name }}" name="permissions[]">
                                                        <label for="customCheckbox-{{ $item2->id }}"
                                                            class="custom-control-label">{{ $item2->name }}</label>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary float-right"> Update Permissions</button>
                </div>
            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @endsection
@push('js')
    <script>
        $(function() {})
    </script>
@endpush

