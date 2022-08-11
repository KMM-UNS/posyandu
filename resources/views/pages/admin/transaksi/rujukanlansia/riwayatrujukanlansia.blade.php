@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])


@push('css')


    @section('content')
        <div class="d-flex justify-content-center ">
            <div class="col-12 ui-sortable">
                <div class="panel panel-inverse">
                    <div class="panel-heading">
                        <h4 class="panel-title">Laporan Rujukan Lansia</h4>
                        <div class="panel-heading-btn">
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                                    class="fa fa-expand"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                                data-click="panel-reload"><i class="fa fa-redo"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                                data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                                data-click="panel-remove"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <h1 class="page-header">
                        <center>Laporan Rujukan Lansia</center>
                    </h1>
                    <form action="/admin/data-transaksi/riwayatrujukan" method="post">
                        @csrf
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <label for="label"> Nama Lansia</label>
                                    <x-form.Dropdown name="namalansia" :options="$nama_lansia"
                                        selected="{{ old('namalansia') ?? ($data['namalansia'] ?? null) }}" required />
                                </div>
                                <button class="btn btn-primary btn-md float-right " type="submit" name="submit"
                                    value="table">Search</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        @if (session('data'))
            <div class="panel panel-inverse">
                <div class="panel-body">
                    <center>
                        <h4> Laporan Data Rujukan Lansia</h4>
                    </center>
                    <a href="/admin/data-transaksi/cetakriwayatrujukan/{{ session('data')->first()->rujukan->id }}"
                        class="btn btn-sm btn-white m-b-10 float-right mr-4"><i
                            class="fa fa-file-pdf t-plus-1 text-danger fa-fw fa-lg"></i> Export
                        as PDF</a>
                    <br>
                    <div class="form-group my-5">
                        <table id="order-listing" class="table">
                            <thead>
                                <tr>
                                    <th>No. </th>
                                    <th>Nama Lansia</th>
                                    <th>Tanggal Pemeriksaan</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>Keluhan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (session('data') as $cetakrl)
                                    <tr>
                                        <td> {{ $loop->iteration }}</td>
                                        <td> {{ $cetakrl->rujukan->nama_lansia }}</td>
                                        <td> {{ $cetakrl->tanggal_surat }}</td>
                                        <td> {{ $cetakrl->umur }}</td>
                                        <td> {{ $cetakrl->jeniskelamin }}</td>
                                        <td> {{ $cetakrl->alamat }}</td>
                                        <td> {{ $cetakrl->keluhan }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
        @endif
    @endsection

    @push('scripts')
        {{-- <script src="{{ asset('dashboard2') }}/vendors/js/vendor.bundle.base.js"></script> --}}
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <script src="{{ asset('dashboard2') }}/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="{{ asset('dashboard2') }}/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{ asset('dashboard2') }}/js/off-canvas.js"></script>
        <script src="{{ asset('dashboard2') }}/js/hoverable-collapse.js"></script>
        <script src="{{ asset('dashboard2') }}/js/template.js"></script>
        <script src="{{ asset('dashboard2') }}/js/settings.js"></script>
        <script src="{{ asset('dashboard2') }}/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('dashboard2') }}/js/data-table.js"></script>
    @endpush
