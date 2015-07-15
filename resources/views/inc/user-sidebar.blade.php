<div class="side-menu-toggle">

    <div class="user-side-menu">
        <div class="user-menu-toggle">
            <a href="#" class="small-menu">
                <i class="fa fa-times"></i>

            </a>
        </div>
        <div id="userSidebar">
            <div class="big-menu-only user-admin-info-wrapper">
                <h4>Full Name:</h4>
                <div class="user-admin-info">
                    <h6>{{ucwords(Auth::user()->first_name)}} {{ucwords(Auth::user()->last_name)}}</h6>
                </div>
            </div>
            <div class="big-menu-only user-admin-info-wrapper">
                <h4>Email:</h4>
                <div class="user-admin-info">
                    <h6>{{Auth::user()->email}}</h6>
                </div>
            </div>
            <div class="big-menu-only user-admin-info-wrapper">
                <h4>Address:</h4>
                <div class="user-admin-info">
                    <h6>{{Auth::user()->address}}, {{Auth::user()->city}}, {{Auth::user()->state}}</h6>
                </div>
            </div>

        </div>

        <div class="big-menu-only admin-footer">
            <p>2015 © Handmade Digital</p>
        </div>
    </div>
</div>