<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <p>Bicol University Graduate School Honorarium Monitoring System</p>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <div class="ml-auto d-flex align-items-center">
            {{-- <a class="profile-logo mx-3" href="#" id="profileLink">
                <i class="bi bi-bell-fill" style="font-size: 28px;"></i>
            </a> --}}
            <div class="btn-group mx-3">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-bell-fill" style="font-size: 24px;"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  {{-- content here --}}
                  Hello World
                </div>
              </div>
            <a class="profile-logo" href="#" id="profileLink">
                <img src="{{ asset('img/avatar.jpg') }}" alt="Profile" class="" ass="rounded-circle" style="width: 48px; height: 48px; border-radius: 200px;">
            </a>
        </div>
    </div>
</nav>
