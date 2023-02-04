@extends('dashboard.template.index')
@section('content')

<div class="header-main-content">
    <small style="color: rgba(0, 0, 0, 0.475);font-size:12px;"><a style="color: rgba(0, 0, 0, 0.685);text-decoration:none;" href="/dashboard">Dashboard</a> > Form Pemeriksaan</small>
    <div style="font-family: sans-serif;font-weight: bold;"><h3><i class="bi bi-file-text" style="margin-right: 5px;"></i>Form Pemeriksaan</h3></div>
    <div style="border-top: 5px solid rgb(29, 104, 201);border-radius:5px;margin: 5px 0px 15px 0px;"></div>
</div>

<div class="form-input-data">
    <form action="/dashboard/form-pemeriksaan/view-tabel" method="GET" class="form-input justify-content-evenly">
    <div class="wrapper-content">
        <button class="btn btn-primary mb-2 btn-submit-form-pemeriksaan" type="submit"><i class="bi bi-printer"></i> Print Hasil Pemeriksaan</button>
        <div class="biodata-pasien">
            <h5 class="mb-2">Biodata Pasien :</h5>
            <div class="form-biodata-pasien">
                <div class="mb-1 wrapper-input-biodata">
                    <label for="input-nama-pasien" style="font-size: 14px;">Nama Pasien : </label>
                    <input class="form-control form-control" id="input-nama-pasien" autocomplete="off" name="nama_pasien" type="text" placeholder="Nama Pasien" value="{{ old('nama_pasien') }}" required>
                    @error('nama_pasien')
                    <div class="text-danger">{{ $message }}</div>
                    @endif
                </div>
                <div class="mb-1 wrapper-input-biodata">
                    <label for="input-umur-pasien" style="font-size: 14px;">Umur : </label>
                    <input class="form-control form-control" id="input-umur-pasien" autocomplete="off" name="umur_pasien" type="number" placeholder="Umur Pasien" value="{{ old('umur_pasien') }}" required>
                    @error('umur_pasien')
                        <div class="text-danger">{{ $message }}</div>
                    @endif
                </div>
                <div class="select-gender wrapper-input-biodata">
                    <label for="gender-input" style="font-size: 14px;">Jenis Kelamin : </label>
                    <select class="form-select form-select" name="gender_pasien" id="gender-input" required>
                        <option value="" selected disabled>-- Jenis Kelamin --</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="wrapper-checklist mb-2">
            <h5>Jenis Pemeriksaan : </h5>
            <div class="wrapper-checklist-input">
                <div class="form-check checklist-filter-form" kategori="input-hematologi">
                    <input class="form-check-input" name="hematologi" type="checkbox" value="hematologi" id="hematologi" checked>
                    <label class="form-check-label" >
                      Hematologi
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-glukosa-darah">
                    <input class="form-check-input" name="glukosa_darah" type="checkbox" value="glukosa-darah" id="glukosa-darah" checked>
                    <label class="form-check-label">
                      Glukosa Darah
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-lemak">
                    <input class="form-check-input" name="lemak" type="checkbox" value="lemak" id="lemak" checked>
                    <label class="form-check-label" >
                      Lemak
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-ginjal">
                    <input class="form-check-input" name="ginjal" type="checkbox" value="ginjal" id="true" checked>
                    <label class="form-check-label" >
                      Ginjal
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-elektrolit">
                    <input class="form-check-input" name="elektrolit" type="checkbox" value="elektrolit" id="true" checked>
                    <label class="form-check-label" >
                      Elektrolit
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-hati">
                    <input class="form-check-input" name="hati" type="checkbox" value="hati" id="true" checked>
                    <label class="form-check-label" >
                      Hati
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-urine">
                    <input class="form-check-input" name="urine" type="checkbox" value="urine" id="true" checked>
                    <label class="form-check-label" >
                      Urine
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-feses">
                    <input class="form-check-input" name="feses" type="checkbox" value="feses" id="true" checked>
                    <label class="form-check-label" >
                      Feses
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-Mikrobiologi">
                    <input class="form-check-input" name="mikrobiologi" type="checkbox" value="mikrobiologi" id="true" checked>
                    <label class="form-check-label" >
                      Mikrobiologi
                    </label>
                </div>
                <div class="form-check checklist-filter-form" kategori="input-Imunologi">
                    <input class="form-check-input" name="imunologi" type="checkbox" value="imunologi" id="true" checked>
                    <label class="form-check-label" >
                      Imunologi
                    </label>
                </div>
                {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="tampilkan-semua" checked>
                    <label class="form-check-label" >
                      Tampilkan Semua
                    </label>
                </div> --}}
            </div>
        </div>    
        <div class="wrapper-form-input">
            <div class="wrapper-pemeriksaan">
                    {{-- HEMATOLOGI --}}
                    <div class="wrapper-nama-pemeriksaan input-hematologi mb-4">
                        <h4>Hematologi</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                             {{-- DARAH LENGKAP --}}
                            <div class="wrapper-darah-lengkap input-pemeriksaan mb-3">
                                <div class="nama-pemeriksaan">Darah lengkap</div>
                                <div class="input-group mb-3">
                                    <input type="hidden" value="Darah Lengkap" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                                <div class="input-tambahan input-tambahan-darah-lengkap">
            
                                    {{-- ERITROSIT --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-eritrosit">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Eritrosit">Eritrosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="eritrosit-darah-lengkap" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 4,5 - 5,5 jt/Ul</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 4,0 - 5,0 jt/uL</div>
                                        </div>
                                    </div>
                                    
                                    {{-- LEUKOSIT --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-leukosit">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="leukosit">Leukosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="leukosit-darah-lengkap" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 4.0 - 11.0 ribu/uL</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 4.0 - 11.0 ribu/uL</div>
                                        </div>
                                    </div>
            
                                    {{-- Monosit --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Monosit">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Monosit">Monosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Monosit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 2 - 6%</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 2 - 6%</div>
                                        </div>
                                    </div>
            
                                    {{-- Limfosit --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Limfosit">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Limfosit">Limfosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Limfosit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 20 - 40%</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 20 - 40%</div>
                                        </div>
                                    </div>
            
                                    {{-- Basofil --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Basofil">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Basofil">Basofil</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Basofil" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 0 - 1%</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 0 - 1%</div>
                                        </div>
                                    </div>
            
                                    {{-- Neutrofil --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Neutrofil">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Neutrofil">Neutrofil</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Neutrofil" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 0 - 2%</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 0 - 2%</div>
                                        </div>
                                    </div>
            
                                    {{-- Eosinofil --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Eosinofil">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Eosinofil">Eosinofil</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Eosinofil" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 1 - 6%</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 1 - 6%</div>
                                        </div>
                                    </div>
            
                                    {{-- Trombosit --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Trombosit">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Trombosit">Trombosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Trombosit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 150 - 400 ribu/uL</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 150 - 400 ribu/uL</div>
                                        </div>
                                    </div>
            
                                    {{-- MCV --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-MCV">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="MCV">MCV</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="MCV" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 77 - 93 Fl</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 77 - 93 Fl</div>
                                        </div>
                                    </div>
            
                                    {{-- MCH --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-MCH">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="MCH">MCH</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="MCH" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 27 - 32 pg</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 27 - 32 pg</div>
                                        </div>
                                    </div>
            
                                    {{-- MCHC --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-MCHC">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="MCHC">MCHC</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-40">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="MCHC" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 31 - 35%</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 31 - 35%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                            <div class="wrapper-main-input-pemeriksaan">
                                    {{-- LED --}}
                                <div class="wrapper-LED mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">LED</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="LED" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="LED" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 0 - 10 mm/jam</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 0 - 20 mm/jam</div>
                                    </div>
                                </div>
                                
                                {{-- Hemoglobin --}}
                                <div class="wrapper-Hemoglobin mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Hemoglobin</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Hemoglobin" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Hemoglobin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 13 - 18 g/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 12 - 16 g/dL</div>
                                    </div>
                                </div>
                
                                
                                {{-- Hematokrit --}}
                                <div class="wrapper-Hematokrit mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Hematokrit</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Hematokrit" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Hematokrit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 38,8% - 50%</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 34,9% - 44,5%</div>
                                    </div>
                                </div>
                
                                
                                {{-- RETIKULOSIT --}}
                                <div class="wrapper-Retikulosit mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Retikulosit</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Retikulosit" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Retikulosit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 0,5% - 1,5%</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 0,5% - 1,5%</div>
                                    </div>
                                </div>
                
                                
                                {{-- BLEEDING TIME --}}
                                <div class="wrapper-bleeding-time mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Bleeding Time</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="bleeding-time" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="bleeding-time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 1 - 3 menit</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 1 - 3 menit</div>
                                    </div>
                                </div>
                
                
                                {{-- CLOTTING TIME --}}
                                <div class="wrapper-clotting-time mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Clotting Time</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="clotting-time" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="clotting-time" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 5 - 15 menit</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 5 - 15 menit</div>
                                    </div>
                                </div>
                
                
                                {{-- GOL. DARAH ABO RH --}}
                                <div class="wrapper-gol-darah mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Gol. Darah ABO Rh</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="gol-darah" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="gol-darah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                </div>
                
                
                                {{-- PT --}}
                                <div class="wrapper-PT mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">PT</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="PT" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="PT" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 10 - 13 menit</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 10 - 13 menit</div>
                                    </div>
                                </div>
                                
                
                                {{-- APTT --}}
                                <div class="wrapper-APPT mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">APTT</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="APTT" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="APTT" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 25 - 35 detik</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 25 - 35 detik</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>
            
                    {{-- Glukosa Darah --}}
                    <div class="wrapper-nama-pemeriksaan input-glukosa-darah mb-4">
                        <h4>Glukosa Darah</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            <div class="wrapper-main-input-pemeriksaan">
                                {{-- PUASA --}}
                                <div class="wrapper-Puasa mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Puasa</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Puasa" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Puasa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : < 100 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : < 100 mg/dL</div>
                                    </div>
                                </div>
                    
                    
                                {{-- Sewaktu --}}
                                <div class="wrapper-Sewaktu mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Sewaktu</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Sewaktu" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Sewaktu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : < 200 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : < 200 mg/dL</div>
                                    </div>
                                </div>
                    
                    
                                {{-- 2 Jam PP --}}
                                <div class="wrapper-2-jam-pp mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">2 Jam PP</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="2-jam-pp" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="2-jam-pp" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 80 - 140 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 80 - 140 mg/dL</div>
                                    </div>
                                </div>
                    
                    
                                {{-- HBA1C --}}
                                <div class="wrapper-HBA1C mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">HBA1C</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="HBA1C" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="HBA1C" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 4% - 5,6%</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 4% - 5,6%</div>
                                    </div>
                                </div>
                    
                    
                                {{-- G.Tolerance Test --}}
                                <div class="wrapper-G-Tolerance mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">G.Tolerance Test</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="G-Tolerance" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="G-Tolerance" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : < 140 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : < 140 mg/dL</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>
            
                    {{-- Lemak --}}
                    <div class="wrapper-nama-pemeriksaan input-lemak mb-4">
                        <h4>Lemak</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            <div class="wrapper-main-input-pemeriksaan">
                                    {{-- KOLESTROL TOTAL --}}
                                <div class="wrapper-kolesterol-total mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Kolesterol Total</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Kolesterol-Total" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Kolesterol-Total" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : < 200 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : < 200 mg/dL</div>
                                    </div>
                                </div>
                                
                                {{-- Trigliserida --}}
                                <div class="wrapper-Trigliserida mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Trigliserida</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="trigliserida" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Trigliserida" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : < 200 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : < 200 mg/dL</div>
                                    </div>
                                </div>
                                
                                {{-- LDL kolesterol --}}
                                <div class="wrapper-LDL-kolesterol mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">LDL kolesterol</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="LDL-kolesterol" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="LDL-kolesterol" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : < 100 mg/Dl</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : < 100 mg/Dl</div>
                                    </div>
                                </div>

                                {{-- HDL kolesterol --}}
                                <div class="wrapper-HDL-kolesterol mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">HDL kolesterol</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="HDL-kolesterol" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="HDL-kolesterol" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 40 - 60 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 40 - 60 mg/dL</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>

                    {{-- Ginjal --}}
                    <div class="wrapper-nama-pemeriksaan input-ginjal mb-4">
                        <h4>Ginjal</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            <div class="wrapper-main-input-pemeriksaan">
                                {{-- Kreatinin --}}
                                <div class="wrapper-Kreatinin mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Kreatinin</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Kreatinin" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Kreatinin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 0,1 - 1,2 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 0,1 - 1,2 mg/dL</div>
                                    </div>
                                </div>
    
                                {{-- Ureum --}}
                                <div class="wrapper-Ureum mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Ureum</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Ureum" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Ureum" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 10 - 50 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 10 - 50 mg/dL</div>
                                    </div>
                                </div>
    
                                {{-- Asam Urat --}}
                                <div class="wrapper-Asam-Urat mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Asam Urat</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Asam-Urat" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Asam-Urat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 3,4 - 7 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 2,4 - 5,7 mg/dL</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>

                    {{-- Elektrolit --}}
                    <div class="wrapper-nama-pemeriksaan input-elektrolit mb-4">
                        <h4>Elektrolit</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            <div class="wrapper-main-input-pemeriksaan">
                                {{-- Natrium (Na) --}}
                                <div class="wrapper-Natrium-Na mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Natrium (Na)</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Natrium-na" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Natrium-Na" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 135 - 145 mEq/L</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 135 - 145 mEq/L</div>
                                    </div>
                                </div>
                                
                                {{-- Kalium (K) --}}
                                <div class="wrapper-Kalium-K mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Kalium (K)</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Kalium-K" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Kalium-K" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 3,5 - 5,3 mEq/L</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 3,5 - 5,3 mEq/L</div>
                                    </div>
                                </div>
    
                                {{-- Clorida (Cl) --}}
                                <div class="wrapper-Clorida-CL mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Clorida (CL)</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Clorida-CL" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Clorida-CL" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 100 - 106 mEq/L</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 100 - 106 mEq/L</div>
                                    </div>
                                </div>
    
                                {{-- Ion Calsium (ICa) --}}
                                <div class="wrapper-Ion-Calsium-ICa mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Ion Calsium (ICa)</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Ion-Calsium-ICa" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="ion-calsium-ica" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 1,120 - 1,320 mEq/L</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 1,120 - 1,320 mEq/L</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>

                    {{-- HATI --}}
                    <div class="wrapper-nama-pemeriksaan input-hati mb-4">
                        <h4>Hati</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            <div class="wrapper-main-input-pemeriksaan">
                                {{-- Bilirubin Total --}}
                                <div class="wrapper-Bilirubin-Total mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Bilirubin Total</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Bilirubin-Total" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Bilirubin-total" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 0,3 - 1,0 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 0,3 - 1,0 mg/dL</div>
                                    </div>
                                </div>
    
                                {{-- Bilirubin Direct --}}
                                <div class="wrapper-Bilirubin-Direct mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Bilirubin Direct</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Bilirubin-Direct" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Bilirubin-Direct" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 0,1 - 0,4 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 0,1 - 0,4 mg/dL</div>
                                    </div>
                                </div>
    
                                {{-- SGOT --}}
                                <div class="wrapper-SGOT mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">SGOT</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="SGOT" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="SGOT" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 5 - 40  µ/L</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 5 - 40  µ/L</div>
                                    </div>
                                </div>
    
                                {{-- SGPT --}}
                                <div class="wrapper-SGPT mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">SGPT</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="SGPT" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="SGPT" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 7 - 56  µ/L</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 7 - 56  µ/L</div>
                                    </div>
                                </div>
    
                                {{-- Gamma GT --}}
                                <div class="wrapper-Gamma-GT mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Gamma GT</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Gamma-GT" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Gamma-GT" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 8 - 61 U/L</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 5 - 36 U/L</div>
                                    </div>
                                </div>
    
                                {{-- Albumin --}}
                                <div class="wrapper-Albumin mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Albumin</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Albumin" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Albumin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 3,8 - 4,2 mg/dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 3,8 - 4,2 mg/dL</div>
                                    </div>
                                </div>
    
                                {{-- Globulin --}}
                                <div class="wrapper-Globulin mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Globulin</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Globulin" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Globulin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 2,8 - 3,2/ dL</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 2,8 - 3,2/ dL</div>
                                    </div>
                                </div>
    
                                {{-- Alkali Fosphatase --}}
                                <div class="wrapper-Alkali-Fosphatase mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Alkali Fosphatase</div>
                                    <div class="input-group mb-1">
                                        <input placeholder="Hasil Pemeriksaan" type="hidden" value="Alkali-Fosphatase" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Alkali-Fosphatase" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : 70 - 200 U/L</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : 70 - 200 U/L</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>
                        
                    {{-- URINE --}}
                    <div class="wrapper-nama-pemeriksaan input-urine mb-4">
                        <h4>Urine</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            {{-- URINE --}}
                            <div class="wrapper-urine-lengkap input-pemeriksaan mb-3">
                                <div class="nama-pemeriksaan">Urine Lengkap</div>
                                <div class="input-group mb-1">
                                    <input type="hidden" value="Urine Lengkap" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                                <div class="input-tambahan input-tambahan-urine-lengkap">

                                    {{-- Bilirubin --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Bilirubin">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Bilirubin">Bilirubin</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="bilirubin" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Urobilinogen --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Urobilinogen">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Urobilinogen">Urobilinogen</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Urobilinogen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Keton --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Keton">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Keton">Keton</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Keton" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Glukosa --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Glukosa">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Glukosa">Glukosa</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Glukosa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Protein --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Protein">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Protein">Protein</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Protein" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- pH --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-pH">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="pH">pH</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="pH" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Nitrit --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Nitrit">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Nitrit">Nitrit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Nitrit" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Berat jenis --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-berat-jenis">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Berat-jenis">Berat jenis</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="berat-jenis" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Eritrosit Urine --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Eritrosit-Urine">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Eritrosit-urine">Eritrosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="eritrosit-urine" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Leukosit --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Leukosit-Urine">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Leukosit-urine">Leukosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Leukosit-urine" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="wrapper-Sedimen input-pemeriksaan mb-3">
                                <div class="nama-pemeriksaan">Sedimen</div>
                                <div class="input-group mb-1">
                                    <input type="hidden" value="Sedimen" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                </div>
                                <div class="input-tambahan input-tambahan-urine-lengkap">
                                    
                                    {{-- Eritrosit --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Eritrosit-urine-sedimen">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Eritrosit-urine-sedimen">Eritrosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Eritrosit-urine-sedimen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) :  1-2</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) :  1-3</div>
                                        </div>
                                    </div>

                                    {{-- Leukosit --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Leukosit-urine-sedimen">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Leukosit-urine-sedimen">Leukosit</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Leukosit-urine-sedimen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) :  0-1</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) :  0-2</div>
                                        </div>
                                    </div>

                                    {{-- Sel epitel --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Sel-epitel">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Sel-epitel">Sel epitel</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="sel-epitel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Silinder --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-silinder">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="silinder">Silinder</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="silinder" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>

                                    {{-- Sel Y --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Sel-Y">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Sel-Y">Sel Y</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="sel-y" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>
                                    
                                    {{-- Bakteri --}}
                                    <div class="wrapper-item-input-tambahan mb-4" id="add-form-Bakteri">
                                        <div class="input-group mb-1">
                                            <span class="input-group-text w-100 justify-content-center" id="Bakteri">Bakteri</span>
                                        </div>
                                        <div class="d-flex">
                                            <div class="input-group input-group-sm w-70">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                                <input placeholder="Hasil Pemeriksaan" type="text" name="Bakteri" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                            </div>
                                        </div>
                                        <div class="nilai-normal-ket">
                                            <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                            <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>

                    {{-- FESES --}}
                    <div class="wrapper-nama-pemeriksaan input-feses mb-4">
                        <h4>Feses</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            <div class="wrapper-main-input-pemeriksaan">
                                {{-- Feses lengkap --}}
                                <div class="wrapper-Feses-lengkap input-pemeriksaan mb-3">
                                    <div class="nama-pemeriksaan">Feses lengkap</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="Feses-lengkap" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="feses-lengkap" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                </div>
    
                                {{-- Darah samar --}}
                                <div class="wrapper-darah-samar input-pemeriksaan mb-3">
                                    <div class="nama-pemeriksaan">Darah samar</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="darah-samar" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="darah-samar" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>

                    {{-- Mikrobiologi --}}
                    <div class="wrapper-nama-pemeriksaan input-Mikrobiologi mb-4">
                        <h4>Mikrobiologi</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            <div class="wrapper-main-input-pemeriksaan">
                                {{-- Malaria --}}
                                <div class="wrapper-Malaria input-pemeriksaan mb-3">
                                    <div class="nama-pemeriksaan">Malaria</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="Malaria" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="Malaria" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                    </div>
                                </div>
    
                                {{-- Pewarnaan Gram --}}
                                <div class="wrapper-Pewarnaan-Gram input-pemeriksaan mb-3">
                                    <div class="nama-pemeriksaan">Pewarnaan Gram</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="Pewarnaan Gram" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="pewarnaan-gram" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                    </div>
                                </div>
    
                                {{-- BTA --}}
                                <div class="wrapper-BTA input-pemeriksaan mb-3">
                                    <div class="nama-pemeriksaan">BTA</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="BTA" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input placeholder="Hasil Pemeriksaan" type="text" name="BTA" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>

                    {{-- Imunologi --}}
                    <div class="wrapper-nama-pemeriksaan input-Imunologi mb-4">
                        <h4>Imunologi</h4>
                        <div class="wrapper-all-item-nama-pemeriksaan w-100">
                            <div class="wrapper-main-input-pemeriksaan">
                            
                                {{-- HbsAg Kualitatif --}}
                                <div class="wrapper-HbsAg-Kualitatif input-pemeriksaan mb-3">
                                    <div class="nama-pemeriksaan">HbsAg Kualitatif</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="HbsAg Kualitatif" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="HbsAg-Kualitatif" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- HbsAg Kuantitatif --}}
                                <div class="wrapper-HbsAg-Kuantitatif input-pemeriksaan mb-3">
                                    <div class="nama-pemeriksaan">HbsAg Kuantitatif</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="HbsAg-Kuantitatif" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="HbsAg-Kuantitatif" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- ASTO --}}
                                <div class="wrapper-ASTO mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">ASTO</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="ASTO" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="ASTO" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- CRP --}}
                                <div class="wrapper-CRP mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">CRP</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="CRP" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="CRP" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- VDRL --}}
                                <div class="wrapper-VDRL mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">VDRL</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="VDRL" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="VDRL" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- RF --}}
                                <div class="wrapper-RF mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">RF</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="RF" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="RF" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- Widal --}}
                                <div class="wrapper-Widal mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">Widal</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="Widal" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="Widal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- TPHA --}}
                                <div class="wrapper-TPHA mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">TPHA</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="TPHA" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="TPHA" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- HCG --}}
                                <div class="wrapper-HCG mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">HCG</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="HCG" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="HCG" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Negatif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Negatif</div>
                                    </div>
                                </div>
                                
                                {{-- HIV --}}
                                <div class="wrapper-HIV mb-3 input-pemeriksaan">
                                    <div class="nama-pemeriksaan">HIV</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="HIV" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="HIV" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                                
                                {{-- NAPZA (6 P) --}}
                                <div class="wrapper-NAPZA-6P input-pemeriksaan mb-3">
                                    <div class="nama-pemeriksaan">NAPZA (6 P)</div>
                                    <div class="input-group mb-1">
                                        <input type="hidden" value="NAPZA-6P" readonly class="form-control" aria-label="Amount (to the nearest dollar)">
                                    </div>
                                    <div class="d-flex mb-2">
                                        <div class="input-group input-group-sm w-40">
                                            <span class="input-group-text" id="inputGroup-sizing-sm">Hasil</span>
                                            <input type="text" name="NAPZA-6P" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Hasil Pemeriksaan">
                                        </div>
                                    </div>
                                    <div class="nilai-normal-ket">
                                        <div class="nilai-normal-male">*Nilai Normal (<b>L</b>) : Non-reaktif</div>
                                        <div class="nilai-normal-woman">*Nilai Normal (<b>P</b>) : Non-reaktif</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="toggle-dropdown"><i class="bi bi-chevron-down"></i></div>
                    </div>
            </div>
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function(){
        $('.checklist-filter-form input').attr('checked', true)
    })
</script>

@endsection