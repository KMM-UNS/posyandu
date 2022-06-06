@extends('layouts.user')
==

@section('content')
@push('css')
	<link href="/assets/plugins/superbox/superbox.min.css" rel="stylesheet" />
	<link href="/assets/plugins/lity/dist/lity.min.css" rel="stylesheet" />
@endpush

@section('content')
{{-- <div class="tab-pane fade" id="profile-about"> --}}
  <!-- begin table -->
  <div class="table-responsive form-inline">
    <table class="table table-profile">
      <thead>
        <tr>
          <th></th>
          <th>
            <h4>Micheal	Meyer <small>Lorraine Stokes</small></h4>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr class="highlight">
          <td class="field">Nama Lansia</td>
          <td><a href="javascript:;">Add Mood Message</a></td>
        </tr>
        <tr class="divider">
          <td colspan="2"></td>
        </tr>
        <tr>
          <td class="field">Email</td>
          <td><i class="fa fa-mobile fa-lg m-r-5"></i> +1-(847)- 367-8924 <a href="javascript:;" class="m-l-5">Edit</a></td>
        </tr>
        <tr>
          <td class="field">No HP</td>
          <td><a href="javascript:;">Add Number</a></td>
        </tr>
        <tr>
          <td class="field">No KMS</td>
          <td><a href="javascript:;">Add Number</a></td>
        </tr>
        <tr class="divider">
          <td colspan="2"></td>
        </tr>
        <tr class="highlight">
          <td class="field">NIK</td>
          <td><a href="javascript:;">Add Description</a></td>
        </tr>
        <tr class="divider">
          <td colspan="2"></td>
        </tr>
        <tr>
          <td class="field valign-middle">Jenis Kelamin</td>
          <td class="with-form-control">
            <select class="form-control form-control-sm" name="region">
              <option value="Pilih" selected>Pilih Disini</option>
              <option value="Perempuan">Perempuan</option>
              <option value="Laki-Laki">Laki-laki</option>
            </select>
          </td>
        </tr>
        <tr>
          <tr class="highlight">
            <td class="field">Tempat, tanggal lahir</td>
            <td><a href="javascript:;">Add Description</a></td>
          </tr>
          <tr class="divider">
            <td colspan="2"></td>
          </tr>
          <tr class="highlight">
            <td class="field">Umur</td>
            <td><a href="javascript:;">Add Description</a></td>
          </tr>
          <tr class="divider">
            <td colspan="2"></td>
          </tr>
          <tr class="highlight">
            <td class="field">Status Perkawinan</td>
            <td><a href="javascript:;">Add Description</a></td>
          </tr>
          <tr class="divider">
            <td colspan="2"></td>
          </tr>
          <tr class="highlight">
            <td class="field">Alamat</td>
            <td><a href="javascript:;">Add Description</a></td>
          </tr>
          <tr class="divider">
            <td colspan="2"></td>
          </tr>
          <tr class="highlight">
            <td class="field">Agama</td>
            <td><a href="javascript:;">Add Description</a></td>
          </tr>
          <tr class="divider">
            <td colspan="2"></td>
          </tr>
          <tr class="highlight">
            <td class="field">Pendidikan Terakhir</td>
            <td><a href="javascript:;">Add Description</a></td>
          </tr>
          <tr class="divider">
            <td colspan="2"></td>
          </tr>
          <tr class="highlight">
            <td class="field">Golongan Darah</td>
            <td><a href="javascript:;">Add Description</a></td>
          </tr>
          <tr class="divider">
            <td colspan="2"></td>
          </tr>
          <tr class="highlight">
            <td class="field">Jaminan Kesehatan</td>
            <td><a href="javascript:;">Add Description</a></td>
          </tr>
          <tr class="divider">
            <td colspan="2"></td>
          </tr>
        <tr class="divider">
          <td colspan="2"></td>
        </tr>
        <tr class="highlight">
          <td class="field">&nbsp;</td>
          <td class="p-t-10 p-b-10">
            <button class="btn btn-primary width-150"data-toggle="modal" data-target="#caraform" >Update</button>
            <div class="modal fade" id="caraform" role="dialog" arialabelledby="modalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">BIODATA LANSIA</h5>
                    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                        {{-- <div class="form-group">
                          <label for="name">Nama Lansia</label>
                          <input type="text" id="nama_lansia" name="nama_lansia" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">Email</label>
                          <input type="text" id="email" name="email" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">No HP</label>
                          <input type="text" id="no_hp" name="no_hp" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">No KMS</label>
                          <input type="text" id="no_KMS" name="no_KMS" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">NIK</label>
                          <input type="text" id="NIK" name="NIK" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">Jenis Kelamin</label>
                          <x-form.genderRadio name="jenis_kelamin" />
                          <label for="name">ttl</label>
                          <input type="text" id="ttl" name="ttl" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">Umur</label>
                          <input type="text" id="umur" name="umur" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">Status Perkawinan</label>
                          <input type="text" id="status_perkawinan" name="status_perkawinan" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">Alamat</label>
                          <input type="text" id="alamat" name="alamat" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">Agama</label>
                          <input type="text" id="agama" name="agama" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">Pendidikan Terakhir</label>
                          <input type="text" id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control" autofocus data-parsley-required="true" 
                          <label for="name">Golongan Darah</label>
                          <input type="text" id="golongan_darah" name="golongan_darah" class="form-control" autofocus data-parsley-required="true" >
                          <label for="name">Jaminan Kesehatan</label>
                          <input type="text" id="jaminan_kesehatan" name="jaminan_kesehatan" class="form-control" autofocus data-parsley-required="true" >
                       </div> --}}
                        <form action="{{ action('BiodataLansiaController@store') }}" method="POST" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                          {{ crsf_field() }}
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="nama_lansia">Nama Lansia :</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="nama_lansia" name="nama_lansia" placeholder="Nama Lansia" data-parsley-required="true" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="email">Email :</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="email" name="email" data-parsley-type="email" placeholder="Email" data-parsley-required="true" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">No Hp :</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="name" id="no_hp" name="no_hp" data-parsley-type="url" placeholder="No" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">No KMS:</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="no_KMS" name="no_KMS" placeholder="No KMS" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">NIK :</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="NIK" name="NIK"  placeholder="NIK" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">Jenis Kelamin  :</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="no_hp" name="no_hp"  placeholder="No" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">Tempat, Tanggal Lahir:</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="ttl" name="ttl"  placeholder="No" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">Umur:</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="umur" name="umur"  placeholder="No" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">Status Perkawinan:</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="status_perkawinan" name="status_perkawinan"  placeholder="No" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">Agama:</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="agama" name="agama"  placeholder="No" />
                            </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">Pendidikan Terakhir:</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="pendidikan_terakhir" name="pendidikan_terakhir"  placeholder="No" />
                          </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">Golongan Darah:</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="golongan_darah" name="golongan_darah"  placeholder="No" />
                          </div>
                          </div>
                          <div class="form-group row m-b-15">
                            <label class="col-md-4 col-sm-4 col-form-label" for="text">Jaminan Kesehatan:</label>
                            <div class="col-md-8 col-sm-8">
                              <input class="form-control" type="text" id="jaminan_kesehatan" name="jaminan_kesehatan"  placeholder="No" />
                          </div>
                          </div>
                          <div class="form-group row m-b-0">
                            <label class="col-md-4 col-sm-4 col-form-label">&nbsp;</label>
                            <div class="col-md-8 col-sm-8">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </td>
            <button type="submit" class="btn btn-white btn-white-without-border width-150 m-l-5">Cancel</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end table -->
</div>
@endsection

@push('scripts')
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
	<script src="/assets/plugins/superbox/jquery.superbox.min.js"></script>
	<script src="/assets/plugins/lity/dist/lity.min.js"></script>
	<script src="/assets/js/demo/profile.demo.js"></script>
@endpush
