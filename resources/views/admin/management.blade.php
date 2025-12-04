@extends('admin.layout.app')

@section('title', 'Create Management')

@section('style')
    <style>
        .table>tbody>tr>td {
            padding: 0px !important;
            margin-bottom: 2px;
        }
        .iconsize {
            font-size: 15px;
        }
        .profileImg {
            width: auto;
            height: 50px;
            object-fit: cover;
            border: 2px dashed #ccc;
            border-radius: 6px;
        }
        .tablepicture {
            width: 30px;
            height: 30px;
            object-fit: fill;
        }
        .headbg>tr>th {
            background-color: #3c5236;
            color: #fff;
            padding: 2px !important;
            margin-bottom: 2px;
        }
        .social_icon{
           padding: 3px 9px;
            background: #FF9800;
            border-radius: 3px;
            margin: 0 3px;
            color: #fff;
        }
    </style>
@endsection

@section('pageside')
    @include('admin.layout.sidebar', ['page' => 'management'])
@endsection
@section('bodyContent')
    <div class="container">
        <div class="page-inner">
            <div class="card">
                <div class="card-header p-1  bg-primary text-white">
                    <h6>Create Management</h6>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">
                            <div class="col-md-1 col-12"><label for="email2">Name :</label></div>
                            <div class="col-md-3 col-12">
                                <input type="text" class="form-control p-1 @error('name') is-invalid
                                @enderror" name="name" value="{{ old('name', optional($editTeam)->name)  }}"
                                    placeholder="Enter Full Name">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-1 col-12"><label for="email2">Desig. :</label></div>
                            <div class="col-md-3 col-12">
                                <input type="text" class="form-control p-1  @error('designation') is-invalid
                                @enderror" name="designation"
                                    value="{{  old('designation', optional($editTeam)->designation)  }}"
                                    placeholder="Enter Designation">
                                @error('designation')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-1 col-12"><label for="email2">Email :</label></div>
                            <div class="col-md-3 col-12">

                                <input type="text" class="form-control p-1  @error('email') is-invalid
                                @enderror" name="email"
                                    value="{{  old('email', optional($editTeam)->email)  }}" placeholder="Enter Email">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 col-12"><label for="email2">Faceb. :</label></div>
                            <div class="col-md-3 col-12">
                                <input type="text" class="form-control p-1  @error('facebook_url') is-invalid
                                @enderror" name="facebook_url"
                                    value="{{  old('facebook_url', optional($editTeam)->facebook_url)  }}"
                                    placeholder="Enter Facebook Url">
                                @error('facebook_url')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-1 col-12"><label for="email2">Twitter :</label></div>
                            <div class="col-md-3 col-12">
                                <input type="text" class="form-control p-1  @error('twitter_url') is-invalid
                                @enderror" name="twitter_url"
                                    value="{{  old('twitter_url', optional($editTeam)->twitter_url)  }}"
                                    placeholder="Enter Twitter Url">
                                @error('twitter_url')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-1 col-12"><label for="email2">Insta. :</label></div>
                            <div class="col-md-3 col-12">
                                <input type="text" class="form-control p-1  @error('instagram_url') is-invalid
                                @enderror" name="instagram_url"
                                    value="{{  old('instagram_url', optional($editTeam)->instagram_url)  }}"
                                    placeholder="Enter Instagram Url">
                                @error('instagram_url')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1 col-12"><label for="email2">Linkd. :</label></div>
                            <div class="col-md-3 col-12">
                                <input type="text" class="form-control p-1  @error('linkedin_url') is-invalid
                                @enderror" name="linkedin_url"
                                    value="{{  old('linkedin_url', optional($editTeam)->linkedin_url)  }}"
                                    placeholder="Enter Linkedin Url">
                                @error('linkedin_url')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-1 col-12"><label style="cursor: pointer;" class="me-2">Pict. :</label></div>
                            <div class="col-md-3 col-12">
                                <input type="file" onchange="previewImagefunction(event,'previewImage')" class="form-control form-control-sm" name="photo" id="imageInput"
                                                accept="image/*">
                                @error('photo')
                                    <p class="text-danger text-center">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-3">
                                <img id="previewImage"
                                            src="{{ $editTeam ? asset('storage/' . $editTeam->photo) : asset('assets/admin/img/demoProfile.png') }}"
                                            alt="Demo Image" class="profileImg" style="">
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  bg-primary text-white p-1">
                            <h6 class="">All Management</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead class="headbg">
                                        <tr role="row bg-dark">
                                            <th style="width: 136.031px;">SL NO:</th>
                                            <th style="width: 75.469px;">Picture</th>
                                            <th style="width: 214.469px;">Name</th>
                                            <th style="width: 214.469px;">email</th>
                                            <th style="width: 214.469px;">Designation</th>
                                            <th style="width: 214.469px;">links</th>
                                            <th style="width: 81.375px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allteam as $team)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $loop->iteration }}</td>
                                                <td>
                                                    <img class="tablepicture"
                                                        src="{{ $team->photo ? asset('storage/' . $team->photo) : asset('assets/admin/img/demoProfile.png') }}"
                                                        alt="user profile picture">
                                                </td>
                                                <td>{{ $team->name }}</td>
                                                <td>{{ $team->email }}</td>
                                                <td>{{ $team->designation }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center">
                                                        <a href="{{ $team->twitter_url }}" target="_blank" class="social_icon"><i class="fab fa-twitter"></i></a>
                                                        <a href="{{ $team->facebook_url }}" target="_blank" class="social_icon"><i class="fab fa-facebook-f iconsize"></i></a>
                                                        <a href="{{ $team->instagram_url }}" target="_blank" class="social_icon"><i class="fab fa-instagram iconsize"></i></a>
                                                        <a href="{{ $team->linkedin_url }}" target="_blank" class="social_icon"><i class="fab fa-linkedin-in iconsize"></i></a>
                                                    </div>
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ route('admin.management', ['id' => $team->id, 'page' => request()->query('page'), 'search' => request()->query('search')]) }}"
                                                        class="btn btn-info p-1 me-1">
                                                        <i class="fas fa-edit iconsize"></i>
                                                    </a>
                                                    <form action="{{ route('admin.management.delete', ['id' => $team->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <!-- <input type="submit" value="Delete"> -->
                                                        <button type="submit" class="btn btn-danger p-1 deleteBtn"><i
                                                                class="fas fa-trash-alt iconsize"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{ asset('/assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).on("click", ".deleteBtn", function (e) {
            e.preventDefault();
            let form = $(this).closest("form"); // nearest form select korbe
            swal({
                title: "Are you sure?",
                text: "You Want To Delete",
                icon: "warning",
                buttons: {
                    cancel: {
                        text: "Cancel",
                        visible: true,
                        className: "btn btn-danger"
                    },
                    confirm: {
                        text: "Yes, delete it!",
                        className: "btn btn-success"
                    }
                },
                dangerMode: true,
            }).then((willDelete) => {
                console.log(willDelete)
                if (willDelete) {
                    form.submit(); // confirm hole form submit hobe
                }
            });
        });
        function previewImagefunction(e,previewId){
            let file = e.target.files[0];
            const imageView = document.getElementById(previewId);
            if(file){
                let reader = new FileReader();
                reader.onload = function(e){
                    imageView.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        }
        $(document).ready(function () {
            $("#basic-datatables").DataTable({
                sort: false
            });
        })
    </script>




@endpush