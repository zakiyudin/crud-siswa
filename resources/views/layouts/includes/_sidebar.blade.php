<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('dashboard') }}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                @if (auth()->user()->role == 'admin')
                    
                <li><a href="{{route('siswa')}}" class=""><i class="lnr lnr-user"></i> <span>Daftar Siswa</span></a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->