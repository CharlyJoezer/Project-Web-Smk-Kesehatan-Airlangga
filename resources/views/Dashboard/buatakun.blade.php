@extends('dashboard.template.index')
@section('content')
    
<div class="header-main-content">
    <small style="color: rgba(0, 0, 0, 0.475);font-size:12px;"><a style="color: rgba(0, 0, 0, 0.685);text-decoration:none;" href="/dashboard">Dashboard</a> > Buat Akun</small>
    <div style="font-family: sans-serif;font-weight: bold;"><h3><i class="bi bi-person-plus" style="margin-right: 5px;"></i>Tambah Akun </h3></div>
    <div style="border-top: 5px solid rgb(29, 104, 201);border-radius:5px;margin: 5px 0px 15px 0px;"></div>
</div>

<div class="wrapper-form-buat-akun">
    @if (session()->has('message_success'))
    <div class="alert alert-success alert-dismissible fade show" style="background-color: rgb(0, 142, 0);" role="alert">
        <div class="text-white" style="font-weight: bold;">{{ session('message_success') }}</div>
        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session()->has('message_failed'))
    <div class="alert alert-danger alert-dismissible fade show" style="background-color: rgba(228, 35, 35, 0.856);" role="alert">
        <div class="text-white" style="font-weight: bold;">{{ session('message_failed') }}</div>
        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="/dashboard/buat-akun/auth/register" method="POST" class="form-buat-akun">
        @csrf
        <h5>Buat Akun : </h5>
        <div class="mb-2">
            <label for="Username" class="form-label">Username</label>
            <input type="text" name="name" class="form-control form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="Username" placeholder="Username" autocomplete="off" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
            <label for="Password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control form-control @error('password') is-invalid @enderror" id="Password" placeholder="Password" required autocomplete="off">
            @error('password')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="input-select-role mb-3">
            <label for="select-role" class="form-label">Role</label>
            <select class="form-select form-select @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}" id="select-role" id="select-role" required >
                <option value="" selected disabled >-- Pilih Role --</option>
                <option value="Admin">Admin</option>
                <option value="Siswa">Siswa</option>
            </select>
            @error('role')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
{{-- 
        <div class="mb-2" id="admin-key">
            <label for="Admin_Password" class="form-label"></label>
            <input type="password"  name="Admin_key"  class="form-control form-control-sm text-center" id="Admin-Password" placeholder="*Admin Key" autocomplete="off">
            <small>*</small>
        </div> --}}


        <button class="btn btn-primary w-100"><i class="bi bi-person-plus" style="margin-right: 5px;"></i>Buat Akun</button>
    </form>
</div>


<script>
    $('#select-role').change(function(){
        if($('#select-role').val() == "Admin"){
            $('#admin-key').css('display', 'block')
        }else if($('#select-role').val() == 'Siswa'){
            $('#admin-key').css('display', 'none')
        }
    })

    $(document).ready(function(){;
        console.log($('#select-role').val());
        // if($('#select-role').val() == "Admin"){
        //     $('#admin-key').css('display', 'block')
        // }else if($('#select-role').val() == 'Siswa'){
        //     $('#admin-key').css('display', 'none')
        // }
    })
</script>

@endsection