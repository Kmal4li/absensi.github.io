@extends('main') 
@section('title','Data Absensi')
@section('breadcrumbs') 

<main id="main" class="main">  
  <div class="pagetitle"> 
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./absensi">Master Data</a></li>
          <li class="breadcrumb-item active">Data Pegawai</li>
        </ol>
      </nav>
    </div>   
<head> 
    
<script type="text/javascript">
        function printDiv(divName){
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
              document.body.innerHTML = printContents;
            window.print();

            document.body.innerHTML = originalContents;
        }
        printDiv('printableArea');
    </script>

<table width="100%"  class="fa fa-text-height" aria-hidden="true"   border="0" cellpadding="0" cellspacing="0"   class="fa fa-align-center" > 
  <tr   align="right"> 
    <td> 
    <a href="#" onclick="printDiv('printableArea')" class="btn btn-success btn-sm">  
      <span class="bi bi-printer" style="font-size:16px"> Print Data</span> </a> 
     <a href="{{ url('./absensi')}}" class="btn btn-success btn-sm" >
       <span class="bi bi-arrow-left-circle-fill" style="font-size:16px"> Back</span></a>  
    </td> 
    </tr>
  </table>

<div id="printableArea">
        <td align="center">
          <h5 class="card-title" align="center">Data Absensi</h5>
        </td>
        <table width="100%" border="1" cellpadding="0" cellspacing="0"> 
                <thead>
                    <tr  bgcolor="gray">
                        <th>No</th>
                        <th>id pegawai</th>
						<th>nama</th>  		
                        <th>tanggal</th> 
                        <th>jam masuk</th>  
                        <th>jam pulang</th>  	 	 
                        <th>status</th>  
                        <th>User Id</th>  
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @foreach ($absensi as $item)
                    <tr>
                    <td>{{$loop -> iteration}}</td>
                  	<td>{{$item -> id_pegawai}}</td>
				    <td>{{$item -> nama}}</td>  
                    <td>{{$item -> tanggal}}</td>  
                    <td>{{$item -> jam_masuk}}</td>  
                    <td>{{$item -> jam_pulang}}</td> 
                    <td>{{$item -> status}}</td>   
                    <td>{{$item -> user_id}}</td>  
		                  </tr>
                @endforeach
                </tbody>
            </table> 
    </div>