<style>
    .top-socli li {
        color: #fff;
        margin-left: 0px !important;
    }

    @media screen and (min-width:1024px) {
        .top-socli li {
            margin-left: 50px !important;
        }
    }

    .top-socli li a {
        color: #fff;
    }

    .py-topbar{
        padding: 4px 0;
    }

    .sosal-py {
        padding: 0.175rem 0.7rem;
    }
</style>
<div class="top-new-heda py-0 w-100 fixed-top" style="background:#0e363e ;">
    <div class="container">
        <div class="row row-cols-2 align-items-center">
            <div class="col-1 col-lg-6">
                <marquee behavior="" direction="" class="text-white  d-none d-lg-block">
                    {{ optional($company)->service_time }}
                </marquee>
            </div>
            <div class="col-12 col-lg-6 d-grid justify-content-end">
                <ul class="top-socli d-flex align-items-center mb-0">
                    <li class="ms-3 d-flex py-topbar">
                        Hotline:  {{ optional($company)->phone }}
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>