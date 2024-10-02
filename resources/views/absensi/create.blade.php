@extends('main') 
@section('title','Data Absensi')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./absensi">Master Data</a></li>
            <li class="breadcrumb-item active">Absensi</li>
          </ol>
        </nav>
      </div>  
        <section  class="section dashboard">
          <div class="col-12">
            <div class="row">  
                <div class="card top-selling overflow-auto">  
                    <div class="content mt-3">
                        <div class="animated fadeIn">  
                                <div class="card-header"> 
                                    <table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
                                        <tr>
                                         <td><h5 class="card-title">Tambah Absensi</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./absensi')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('absensi')}}" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">ID Pegawai</label>
                                                        <div class="col-sm-10">
                                                        <select class ="form-control" id="id_pegawai" name="id_pegawai" >
                                                            @foreach ($pegawai as $item)
                                                            <option value="{{ $item->id_pegawai }}">{{$item ->id_pegawai}}-{{$item ->nama}}</option>
                                                            @endforeach
                                                          </select>      
                                                           </div>
                                                      </div> 
                        

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Tanggal</label>
                                                        <div class="col-sm-10">
                                                          <input type="date" class="form-control @error('tanggal') is-invalid @enderror"   value="{{ old('tanggal') }}"  name="tanggal"  required autofocus>
                                                           </div>
                                                      </div>
                                                      
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Jam masuk</label>
                                                        <div class="col-sm-10">
                                                          <input type="time" class="form-control @error('jam_masuk') is-invalid @enderror"   value="{{ old('jam_masuk') }}"  name="jam_masuk"  required autofocus>
                                                           </div>
                                                      </div>  

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Jam Keluar</label>
                                                        <div class="col-sm-10">
                                                          <input type="time" class="form-control @error('jam_keluar') is-invalid @enderror"   value="{{ old('jam_keluar') }}"  name="jam_keluar"  required autofocus>
                                                           </div>
                                                      </div>  

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Status</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('status') is-invalid @enderror"   value="{{ old('status') }}"  name="status"  required autofocus>
                                                           </div>
                                                      </div>
                                                    <button type="submit" class="btn btn-success" style="font-size:16px"><span class="bi bi-save2 green-color"> Save </span></button>
                                                  </form>
                                                 
                                            </div> 
                                  </div>
                           
                        </div> 
                    </div> 
                </div>
            </div>
        </div>
      </section> 
</main> 
@endsection
