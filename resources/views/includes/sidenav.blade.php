<div class="wrapper d-flex align-items-stretch">
<nav id="sidebar">
    <div class="border-bottom">
        <div class="div-nav-logo d-flex justify-content-start align-items-center ml-4 ">
            <img src="{{ asset('img/logo.png') }}" class="nav-logo-container" alt="Login">
            <div class="d-flex flex-column">
                <b class="ml-2" style="color: #332C5A; font-size: 32px;">BUGS</b>
                <p class="ml-2" style="color: #332C5A; font-size: 10px; margin-top: -16px;">Honorarium Monitoring System</p>
            </div>
        </div>
    </div>
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="p-4 pt-5">
        {{-- <h1 class=""><a href="" class="logo">BUGS</a></h1> --}}
        <ul class="list-unstyled components mb-5">

            <div class="custom-link-div">
                <a href="" class="custom-link align-items-center"><i class="bi bi-plus-circle">&nbsp;</i>New Entries</a>
            </div>

            <li class="">
                <a href="#" class="nav-link"><i class="bi bi-house">&nbsp;</i>Dashboard</a>
            </li>
            <li>
                <a href="#" class="nav-link"><i class="bi bi-chat-dots">&nbsp;</i>Inbox <span class="badge badge-pill badge-success">10</span></a>
            </li>
            <li>
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="nav-link"><small style="margin-right: 20%; font-size: 16px;"><i class="bi bi-arrow-left-right">&nbsp;</i>Transactions</small><i class="bi bi-caret-down-fill flex-end"></i></a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="#" class="nav-link">Honorarium</a>
                </li>
                <li>
                    <a href="#" class="nav-link">New Entries</a>
                </li>
                <li>
                    <a href="#" class="nav-link">On Queue</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Pending</a>
                </li>
                <li>
                    <a href="#" class="nav-link">Tracking</a>
                </li>
                </ul>
            </li>
            <li>
                <a href="#" class="nav-link"><i class="bi bi-clock-history">&nbsp;</i>Transaction History</a>
            </li>
            <li>
                <a href="#" class="nav-link"><i class="bi bi-people">&nbsp;</i>Faculties</a>
            </li>
        </ul>
  </div>
</nav>
