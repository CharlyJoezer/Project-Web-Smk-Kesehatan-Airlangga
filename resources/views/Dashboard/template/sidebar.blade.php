<div class="sidebar">
    <div class="sidebar-header">
        <img src="/asset/logo_skakes3.webp" alt="">
    </div>
    <hr style="margin: 0px; color:white;">
    <div class="wrapper-sidebar-content">
        <div class="list-item-sidebar">
            <div class="mb-1 text-white" style="font-size:15px;font-weight: 500;">Dashboard</div>
            <a href="/dashboard">
                <i class="bi bi-border-all" style="margin-right: 5px;"></i>
                <span>Home</span>
            </a>
            <a href="/dashboard/form-pemeriksaan">
                <i class="bi bi-file-text" style="margin-right: 5px;"></i>
                <span>Form Pemeriksaan</span>
            </a>
            @if (auth()->user()->role == 'Admin')
            <a href="/dashboard/buat-account">
                <i class="bi bi-person-plus" style="margin-right: 5px;"></i>
                <span>Buat Akun</span>
            </a>
            @endif
        </div>
    </div>
    <div class="wrapper-user-sidebar-login">
        <div class="d-flex align-items-center sidebar-user-login">
            <div>
                <img src="/asset/default_profil.png" alt="">
            </div>
            <div class="user-detail">
                <div style="font-size: 13px;font-family: sans-serif;">
                    <div>{{ auth()->user()->name }}</div>
                    <div style="font-size: 10px;color:rgba(255, 255, 255, 0.71);">Role : {{ auth()->user()->role }}</div>
                </div>
                <a href="/auth/logout" class="btn btn-danger btn-sm" style="font-size: 10px;" title="Logout"><i class="bi bi-box-arrow-in-left"></i></a>
            </div>
        </div>
    </div>

</div>

<script>
</script>