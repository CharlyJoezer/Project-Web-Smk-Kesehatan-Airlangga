@if($kategori['hematologi'] != null)

    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Hematologi</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.001</td>
        <th colspan="4">Darah Lengkap</th>
    </tr>
    <tr>
        <td></td>
        <td>Eritrosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('eritrosit-darah-lengkap') }}</td>
        <td class="text-center">4,0 - 5,0 jt/uL</td>
        
    </tr>
    <tr>
        <td></td>
        <td>Leukosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('leukosit-darah-lengkap') }}</td>
        <td class="text-center">4.0 - 11.0 ribu/uL</td>
    </tr>
    <tr>
        <td></td>
        <td>Monosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Monosit }}</td>
        <td class="text-center">2 - 6 %</td>
    </tr>
    <tr>
        <td></td>
        <td>Limfosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Limfosit }}</td>
        <td class="text-center">20 - 40 %</td>
    </tr>
    <tr>
        <td></td>
        <td>Basofil</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Basofil }}</td>
        <td class="text-center">0 - 1 %</td>
    </tr>
    <tr>
        <td></td>
        <td>Neutrofil</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Neutrofil }}</td>
        <td class="text-center">0 - 2 %</td>
    </tr>
    <tr>
        <td></td>
        <td>Eosinofil</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Eosinofil }}</td>
        <td class="text-center">1 - 6 %</td>
    </tr>
    <tr>
        <td></td>
        <td>Trombosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Trombosit }}</td>
        <td class="text-center">150 - 400 ribu/uL</td>
    </tr>
    <tr>
        <td></td>
        <td>MCV</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->MCV }}</td>
        <td class="text-center">77 - 93 Fl</td>
    </tr>
    <tr>
        <td></td>
        <td>MCH</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->MCH }}</td>
        <td class="text-center">27 - 32 pg</td>
    </tr>
    <tr>
        <td></td>
        <td>MCHC</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->MCHC }}</td>
        <td class="text-center">31 - 35 %</td>
    </tr>
    <tr>
        <td class="tabel-row-count">.002</td>
        <th>LED</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->LED }}</td>
        <td class="text-center">0 - 20 mm/jam</td>
    </tr>
    <tr>
        <td class="tabel-row-count">.003</td>
        <th>Hemoglobin</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Hemoglobin }}</td>
        <td class="text-center">12 - 16 g/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.004</td>
        <th>Hematokrit</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Hematokrit }}</td>
        <td class="text-center">34,9% - 44,5%</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.005</td>
        <th>Retikulosit</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Retikulosit }}</td>
        <td class="text-center">0,5% - 1,5%</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.006</td>
        <th>Bleeding time</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('bleeding-time') }}</td>
        <td class="text-center">1 - 3 menit</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.007</td>
        <th>Clotting Time</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('clotting-time') }}</td>
        <td class="text-center">5 - 15 menit</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.008</td>
        <th>Gol. Darah ABO Rh</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('gol-darah') }}</td>
        <td class="text-center">-</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.009</td>
        <th>PT</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->PT }}</td>
        <td class="text-center">10 - 13 menit</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.010</td>
        <th>APTT</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->APTT }}</td>
        <td class="text-center">25 - 35 detik</td>

    </tr>
@endif

@if($kategori['glukosa_darah'])
    
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Glukosa Darah</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.011</td>
        <th>Puasa</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Puasa }}</td>
        <td class="text-center">< 100 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.012</td>
        <th>Sewaktu</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Sewaktu }}</td>
        <td class="text-center">< 200 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.013</td>
        <th>2 Jam pp</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('2-jam-pp') }}</td>
        <td class="text-center">80 - 140 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.014</td>
        <th>HBA1C</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->HBA1C }}</td>
        <td class="text-center">4% - 5,6%</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.015</td>
        <th>G.Tolerance Test</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('G-Tolerance') }}</td>
        <td class="text-center">< 140 mg/dL</td>

    </tr>
@endif

@if($kategori['lemak'] != null)
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Lemak</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.016</td>
        <th>Kolesterol total</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Kolesterol-Total') }}</td>
        <td class="text-center">< 200 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.017</td>
        <th>Trigliserida</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Trigliserida }}</td>
        <td class="text-center">< 150 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.018</td>
        <th>LDL kolesterol</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('LDL-kolesterol') }}</td>
        <td class="text-center">< 100 mg/Dl</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.019</td>
        <th>HDL kolesterol</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('HDL-kolesterol') }}</td>
        <td class="text-center">40 - 60 mg/dL</td>

    </tr>
@endif

@if($kategori['ginjal'] != null)
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Ginjal</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.020</td>
        <th>Kreatinin</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Kreatinin }}</td>
        <td class="text-center">0,1 - 1,2 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.021</td>
        <th>Ureum</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Ureum }}</td>
        <td class="text-center">10 - 50 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.022</td>
        <th>Asam Urat</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Asam-Urat') }}</td>
        <td class="text-center">2,4 - 5,7 mg/dL</td>

    </tr>
@endif

@if($kategori['elektrolit'] != null)    
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Elektrolit</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.023</td>
        <th>Natrium (Na)</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Natrium-Na') }}</td>
        <td class="text-center">135 - 145 mEq/L</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.024</td>
        <th>Kalium (K)</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Kalium-K') }}</td>
        <td class="text-center">3,5 - 5,3 mEq/L</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.025</td>
        <th>Clorida (Cl)</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Clorida-CL') }}</td>
        <td class="text-center">100 - 106 mEq/L</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.026</td>
        <th>Ion Calsium (ICa)</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('ion-calsium-ica') }}</td>
        <td class="text-center">1,120 - 1,320 mEq/L</td>

    </tr>
@endif

@if($kategori['hati'] != null)
    
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Hati</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.027</td>
        <th>Bilirubin Total</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Bilirubin-total') }}</td>
        <td class="text-center">0,3 - 1,0 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.028</td>
        <th>Bilirubin Direct</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Bilirubin-Direct') }}</td>
        <td class="text-center">0,1 - 0,4 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.029</td>
        <th>SGOT</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->SGOT }}</td>
        <td class="text-center">5 - 40  µ/L</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.030</td>
        <th>SGPT</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->SGPT }}</td>
        <td class="text-center">7 - 56  µ/L</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.031</td>
        <th>Gamma GT </th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Gamma-GT') }}</td>
        <td class="text-center">5 - 36 U/L</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.032</td>
        <th>Albumin </th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Albumin }}</td>
        <td class="text-center">3,8 - 4,2 mg/dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.033</td>
        <th>Globulin</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Globulin }}</td>
        <td class="text-center">2,8 - 3,2/ dL</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.034</td>
        <th>Alkali Fosphatase</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Alkali-Fosphatase') }}</td>
        <td class="text-center">70 - 200 U/L</td>

    </tr>
@endif

@if ($kategori['urine'] != null)   
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Urine</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.035</td>
        <th colspan="4">Urine Lengkap</th>
    </tr>
    <tr>
        <td></td>
        <td>Bilirubin</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->bilirubin }}</td>
        <td class="text-center">Negatif</td>
    </tr>
    <tr>
        <td></td>
        <td>Urobilinogen</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Urobilinogen }}</td>
        <td class="text-center">Negatif</td>
    </tr>
    <tr>
        <td></td>
        <td>Keton</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Keton }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>Glukosa</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Glukosa }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>Protein</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Protein }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>pH</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->pH }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>Nitrit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Nitrit }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>Berat jenis</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('berat-jenis') }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>Eritrosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('eritrosit-urine') }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>Leukosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Leukosit-urine') }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.036</td>
        <th colspan="5">Sedimen</th>
    </tr>
    <tr>
        <td></td>
        <td>Eritrosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Eritrosit-urine-sedimen') }}</td>
        <td class="text-center">1 - 3</td>

    </tr>
    <tr>
        <td></td>
        <td>Leukosit</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('Leukosit-urine-sedimen') }}</td>
        <td class="text-center">0 - 2</td>

    </tr>
    <tr>
        <td></td>
        <td>Sel epitel</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('sel-epitel') }}</td>
        <td class="text-center">Negatif</td>
    </tr>
    <tr>
        <td></td>
        <td>Silinder</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->silinder }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>Sel Y</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('sel-y') }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td></td>
        <td>Bakteri</td>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Bakteri }}</td>
        <td class="text-center">Negatif</td>

    </tr>
@endif

@if($kategori['feses'] != null)
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Feses</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.037</td>
        <th>Feses lengkap</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('feses-lengkap') }}</td>
        <td class="text-center">-</td>
    </tr>
    <tr>
        <td class="tabel-row-count">.038</td>
        <th>Darah samar</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('darah-samar') }}</td>
        <td class="text-center">Negatif</td>

    </tr>
@endif

@if($kategori['mikrobiologi'] != null)
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Mikrobiologi</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.039</td>
        <th>Malaria</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Malaria }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.040</td>
        <th>Pewarnaan Gram</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('pewarnaan-gram') }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.041</td>
        <th>BTA</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->BTA }}</td>
        <td class="text-center">Negatif</td>

    </tr>
@endif

@if($kategori['imunologi'] != null)
    <tr>
        <th colspan="5" class="kategori-pemeriksaan"><span>Imunologi</span></th>
    </tr>
    <tr>
        <td class="tabel-row-count">.042</td>
        <th>HbsAg Kualitatif</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('HbsAg-Kualitatif') }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.043</td>
        <th>HbsAg Kuantitatif</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('HbsAg-Kuantitatif') }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.044</td>
        <th>ASTO</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->ASTO }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.045</td>
        <th>CRP</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->CRP }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.046</td>
        <th>VDRL</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->VDRL }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.047</td>
        <th>RF</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->RF }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.048</td>
        <th>Widal</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->Widal }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.049</td>
        <th>TPHA</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->TPHA }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.050</td>
        <th>HCG</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->HCG }}</td>
        <td class="text-center">Negatif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.051</td>
        <th>HIV</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->HIV }}</td>
        <td class="text-center">Non reaktif</td>

    </tr>
    <tr>
        <td class="tabel-row-count">.052</td>
        <th>NAPZA (6 P)</th>
        <td class="text-center" contenteditable="true" colspan="2">{{ $data->input('NAPZA-6P') }}</td>
        <td class="text-center">Non reaktif</td>
    </tr>
@endif

<script>
    $(document).ready(function(){
        let count_row = $('.tabel-row-count').length
        for(i = 1; i <= count_row; i++){
            if(String(i).length == 1){
                $('.tabel-row-count').eq(i - 1).html(`.00${i}`)
            }else{
                $('.tabel-row-count').eq(i - 1).html(`.0${i}`)
            }
        }
    })
</script>