@extends('main') 
@section('title','Data Pegawai')
@section('breadcrumbs') 
<main id="main" class="main">  
    <div class="pagetitle"> 
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./pegawai">Master Data</a></li>
            <li class="breadcrumb-item active">Pegawai</li>
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
                                         <td><h5 class="card-title">Tambah Data Pegawai</span></h5></td>
                                         <td> 
                                           <div align="right"><a href="{{ url('./pegawai')}}" class="btn btn-success btn-sm" >
                                             <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a> 
                                           </div> 
                                         </td> 
                                          </tr>
                                        </table>

                                        <div class="col-12">
                                            <div class="card recent-sales overflow-auto">
                                            <div class="card-body">  
                                            <form action="{{ url('pegawai')}}" method="post" enctype="multipart/form-data">
                                                  {{ csrf_field() }} 
                                                  <p>
                                                    <div class="row mb-3"> 
                                                        <label for="name" class="col-sm-2 col-form-label">ID Pegawai</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('id_pegawai') is-invalid @enderror"   value="{{ old('id_pegawai') }}"  name="id_pegawai"  required autofocus>
                                                           </div>
                                                      </div> 
                        
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('nama') is-invalid @enderror"   value="{{ old('nama') }}"  name="nama"  required autofocus>
                                                           </div>
                                                      </div>  

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">alamat</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('alamat') is-invalid @enderror"   value="{{ old('alamat') }}"  name="alamat"  required autofocus>
                                                           </div>
                                                      </div>
                                                      
                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('email') is-invalid @enderror"   value="{{ old('email') }}"  name="email"  required autofocus>
                                                           </div>
                                                      </div>  

                                                      <div class="row mb-3">
                                                        <label for="name" class="col-sm-2 col-form-label">No HP</label>
                                                        <div class="col-sm-10">
                                                          <input type="text" class="form-control @error('no_hp') is-invalid @enderror"   value="{{ old('no_hp') }}"  name="no_hp"  required autofocus>
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
