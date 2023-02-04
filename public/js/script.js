$('.wrapper-nama-pemeriksaan h4, .toggle-dropdown').click(function(){
    $(this).parent().children('.wrapper-all-item-nama-pemeriksaan').toggle('.d-block')
})

// $('#gender-input').change(function(){
//     $('.wrapper-form-input').addClass('d-block')
// })
$('#sidebarButton').click(function(){
    $('.sidebar').toggleClass('sidebar-toggle')
});
$(document).ready(function(){
    let box_user_log = $('.wrapper-user-sidebar-login').height();
    $('.wrapper-sidebar-content').css({
        'margin-bottom' : `${box_user_log}px`
    })
})


// FILTER FORM PEMERIKSAAN
$('.checklist-filter-form input').click(function(){
    
    let kategori = $(this).parent().attr('kategori');
    if($(this).prop('checked') == false){
        $('#tampilkan-semua').attr('checked', false)
    }

    $(`.${kategori}`).toggleClass('form-pemeriksaan-display')
});


$('#option-print').click(function(){
    
    // HITAM PUTIH
    if($(this).prop('checked') == true){
        $('.data-pasien-print').css({
            'background-color': 'white',
            'color' : 'black',
            'padding': '0px',
        })
        $('.data-pasien-print .hr-biodata').css({
            'background-color': 'black',
        })
        $('.tabel-biodata-pasien').css({
            'padding-left' : '10px',
            'padding-bottom' : '12px'
        })
        $('.kategori-pemeriksaan').addClass('kategori-pemeriksaan-change')
    }else{
        $('.data-pasien-print').css({
            'background-color': 'rgb(21, 152, 228)',
            'color' : 'white',
            'padding': '10px 12px',
            'margin-bottom' : '0px'
        })
        $('.data-pasien-print .hr-biodata').css({
            'background-color': 'white',
        })
        $('.tabel-biodata-pasien').css({
            'padding' : '0px'
        })
        $('.kategori-pemeriksaan').removeClass('kategori-pemeriksaan-change')
    }
})