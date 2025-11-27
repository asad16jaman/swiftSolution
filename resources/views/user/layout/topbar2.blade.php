<style>
    .top-socli li i {}

    .sosal-py {
        padding: 0.175rem 0.7rem;
    }

    .logo-height {
        height: 89px;
    }

    .topy {
        top: 32px
    }


    .holographic-card{
        padding: 7px 0;
    }
    .holographic-card ul li {
        list-style: none;
        float: left;
      }

    .holographic-card  ul li a {
            width: 45px;
    height: 45px;
    background-color: #fff;
    text-align: center;
    font-size: 21px;
    border-radius: 50%;
    position: relative;
    overflow: hidden;
    /* border: 2px solid red; */
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 21px;
      }

    .holographic-card ul li a .icon {
        position: relative;
        color: #262626;
        transition: 0.5s;
        z-index: 3;
      }

     .holographic-card ul li a:hover .icon {
        color: #fff;
        transform: rotateY(360deg);
      }

    .holographic-card ul li a:before {
        content: "";
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        height: 100%;
        background: #f00;
        transition: 0.5s;
        z-index: 2;
      }

    .holographic-card ul li a:hover:before {
        top: 0;
      }
    

     .holographic-card  ul li:nth-child(1) a {
        border: 2px solid #3b5999;
      }

     .holographic-card ul li:nth-child(2) a {
        border: 2px solid #55acee;
      }

     .holographic-card ul li:nth-child(3) a {
        border: 2px solid #0077b5;
      }

     .holographic-card ul li:nth-child(4) a {
        border: 2px solid #dd4b39;
      } 



    .holographic-card  ul li:nth-child(1) a:before {
        background: #3b5999;
      }

     .holographic-card ul li:nth-child(2) a:before {
        background: #55acee;
      }

     .holographic-card ul li:nth-child(3) a:before {
        background: #0077b5;
      }

     .holographic-card ul li:nth-child(4) a:before {
        background: linear-gradient(45deg, #ffc30b, #fe1c80);
      }

</style>
<div class="top-new-heda py-0 w-100 fixed-top topy" style="background:#ffffff ;">
    <div class="container">
        <div class="row row-cols-2 align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
                    <img src="{{ asset('assets/user/assets/img/swift_logo.png') }}" alt="" class="logo-height">
                </a>
            </div>
            <div class="col-12 col-lg-6 d-grid justify-content-end">
                <div class="holographic-card">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f icon"></i> </a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter icon"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-linkedin-in icon"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-instagram icon"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>