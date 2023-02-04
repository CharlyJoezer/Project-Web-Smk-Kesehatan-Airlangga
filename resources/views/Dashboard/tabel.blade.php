@extends('dashboard.template.index')
@section('content')

<div class="header-main-content">
    <small style="color: rgba(0, 0, 0, 0.475);font-size:12px;"><a style="color: rgba(0, 0, 0, 0.685);text-decoration:none;" href="/dashboard">Dashboard</a> > Form Pemeriksaan > View Tabel</small>
    <div style="font-family: sans-serif;font-weight: bold;"><h3>View Tabel Form </h3></div>
    <div style="border-top: 5px solid rgb(29, 104, 201);border-radius:5px;margin: 5px 0px 15px 0px;"></div>
</div>

<button class="button-print btn btn-primary mb-2" onclick="window.print()"><i class="bi bi-printer"></i> Print</button>
<div class="form-check form-switch mb-2">
    <input class="form-check-input" type="checkbox" role="switch" id="option-print">
    <label class="form-check-label" for="option-print">Hapus Background</label>
</div>
<div class="wrapper-tabel-content">
    <div class="data-pasien-print">
        <div>
            <img src="/asset/logo_skakes2.png" style="margin-right: 10px;" width="225" alt="">
        </div>
        <div class="hr-biodata" style="height: 2px;background-color: rgba(255, 255, 255, 0.562);margin: 10px 0px;border-radius: 5px;"></div>
        <h5 class="text-center my-2" style="font-weight: bold;font-size:17px;">FORM HASIL PEMERIKSAAN LABORATORIUM</h5>

        <div class="d-flex tabel-biodata-pasien">
            <table style="margin-right: 50px;">
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <td style="padding-left: 15px;" contenteditable="true">{{ $data->nama_pasien }}</td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <th>:</th>
                    <td style="padding-left: 15px;" contenteditable="true">{{ $data->umur_pasien }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td style="padding-left: 15px;">{{ $data->gender_pasien }}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <th>Tanggal Pemeriksaan</th>
                    <th>:</th>
                    <td style="padding-left: 15px;" id="date-js"> - </td>
                </tr>
                <tr>
                    <th>Nama Dokter</th>
                    <th>:</th>
                    <td style="padding-left: 15px;">dr. Muhammad Iswan,Sp.PK</td>
                </tr>
                <tr style="opacity: 0;">
                    <th>-</th>
                    <th>-</th>
                    <td>-</td>
                </tr>
            </table>
        </div>
    </div>

    <table class="table tabel-print-pemeriksaan table-bordered" style="border-color: #555;" id="tabel-print-pemeriksaan">
        <thead class="table-head-form" >
          <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Nama Pemeriksaan</th>
            <th rowspan="2" class="text-center p-0">Hasil</th>
            <th colspan="2" class="text-center">Nilai Normal</th>
          </tr>
          <tr>
            @if($data->gender_pasien == 'Laki-Laki')
            <th colspan="2" class="text-center">L</th>
            @else
            <th colspan="2" class="text-center">P</th>
            @endif
          </tr>
        </thead>
        <tbody>
            @if($data->gender_pasien == 'Laki-Laki')
                @include('dashboard.Temp_Pemeriksaan.male')
            @elseif($data->gender_pasien == 'Perempuan')
                @include('dashboard.Temp_Pemeriksaan.woman')
            @endif
        </tbody>
      </table>

      <div class="wrapper-box-tanda-tangan">
          <div class="box-tanda-tangan ps-4">
            <div>Smk Kesehatan Airlangga<br>Penanggung Jawab,</div>
            <div>dr. Muhammad Iswan,Sp.PK</div>
          </div>
          <div class="box-tanda-tangan pe-4">
            <div>Smk Kesehatan Airlangga<br>Pemeriksa,</div>
            <div>Siti Ngatikah Rohmah,S.Tr.Kes</div>
          </div>
      </div>
</div>

<script>
    $(document).ready(function(){
        const date = new Date()
        let currentDate = `${date.getDate()}-${date.getMonth() + 1}-${date.getFullYear()}`;
        $('#date-js').html(currentDate)
    })
</script>
      
    
@endsection