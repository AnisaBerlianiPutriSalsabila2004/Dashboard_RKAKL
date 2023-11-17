@extends('dashboard.sidebar')

@section('content')
<div class="container-fluid bg-light shadow p-0">
    <div class="d-flex justify-content-between">
        <div class="py-2">
            <form>
                <img class="ms-3 me-2" type="submit" src="icon_search.png" width="30px">
                <input class="border-0 input-search m-0" placeholder="Search (Ctrl+/)" id="search" name="search">
            </form>
        </div>
        <div class="py-2">
            <img src="icon_darkmode.png" width="30px">
            <img class="ms-2" src="icon_notif.png" width="30px">
            <img class="ms-2 me-3 rounded-circle" src="icon_avatar.png" width="30px">
        </div>
    </div>
</div>
<div class="card m-4">
    <div class="card-header bg-headcard"></div>
    <div class="card-body position-relative body-profile">
        <img class="border border-light border-5 rounded-3 position-absolute photo-profile ms-2" src="catty.png" width="150px">
        <div class="position-absolute name-profile">
            <h3>Full Name</h3>
        </div>
        <div class="position-absolute desc-profile">
            <img src="icon_admin.png" width="25px">
            <p class="sebaris">Super-admin</p>
            <img class="ms-4" src="icon_lokasi.png" width="25px">
            <p class="sebaris">Yogyakarta</p>
            <img class="ms-4" src="icon_join.png" width="25px">
            <p class="sebaris">Joined April 2021</p>
        </div>
        <div class="position-absolute sett-profile">
            <img src="icon_settings.png" width="25px">
        </div>
    </div>
</div>
@endsection