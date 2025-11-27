@extends('admin.layout.app')

@section('title', 'Our Wings Page')

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
            height: 100px;
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
    </style>
@endsection

@section('pageside')
    @include('admin.layout.sidebar', ['page' => 'wings'])
@endsection

@section('bodyContent')

<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-12">
                <div class="card mb-1">
                    <div class="card-header pt-1 pb-0">
                        <h4 class="text-center">Create Wings</h4>
                    </div>
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body px-3 py-1">
                            <div class="row">
                                <div class="mb-2 col-md-6 col-12">
                                    <label for="title">Title</label>
                                    <input type="text" name="title"
                                        value="{{ old('title', optional($editgallery)->title) }}" id="title"
                                        class="form-control form-control-sm">
                                </div>
                                <div class="mb-2 col-md-6 col-12">
                                    <label for="link">Link*</label>
                                    <input type="text" placeholder="Enter Link" name="link"
                                        value="{{ old('link', optional($editgallery)->link) }}" id="link"
                                        class="form-control form-control-sm @error('link') is-invalid @enderror">
                                    @error('link')
                                        <p class="text-danger text-center">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-2 col-md-6 col-12">
                                    <label for="" style="cursor: pointer;">
                                        <!-- (placeholder) -->
                                        Thumbnail*
                                    </label>
                                    <!-- hidden input -->
                                    <input type="file" class="form-control form-control-sm mb-1" name="img" id="imageInput"
                                        accept="image/*">
                                    <img id="previewImage"
                                        src="{{ ($editgallery && $editgallery->img) ? asset('storage/' . $editgallery->img) : asset('assets/admin/img/demoUpload.jpg') }}"
                                        alt="Demo Image" class="profileImg" style="">
                                    @error('img')
                                        <p class="text-danger text-center">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="d-flex justify-content-end">
                                <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header p-2">
                        <h5 class="card-title ">Our Wings</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="basic-datatables_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="table-responsive">
                                            <table id="basic-datatables"
                                                class="display table table-striped table-hover">
                                                <thead class="headbg">
                                                    <tr role="row bg-dark">
                                                        <th style="width: 56.031px;">SL:</th>
                                                        <th style="width: 64.469px;">Thumbnail</th>
                                                        <th style="width: 304.469px;">Title</th>
                                                        <th style="width: 60.469px;">Home</th>
                                                        <th style="width: 60.469px;">Status</th>
                                                        <th style="width: 50.469px;">Link</th>
                                                        <th style="width: 81.375px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse($allgallery as $gallery)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{ $loop->iteration }}</td>
                                                        <td>
                                                            <img class="tablepicture"
                                                                src="{{ $gallery->img ? asset('storage/' . $gallery->img) : asset('assets/admin/img/demoProfile.png') }}"
                                                                alt="user profile picture">
                                                        </td>
                                                        <td>{{ $gallery->title ?? "Not Set" }}</td>
                                                        <td>
                                                            <form action="{{ route('admin.homeactive',['id'=> $gallery->id]) }}" method="post">
                                                                @csrf
                                                                <select name="home" id="" class="form-select form-select-sm" onchange="this.form.submit()">
                                                                    <option value="active" >Active</option>
                                                                    <option value="inactive" {{ ($gallery->home == 0) ? "selected" : '' }}>Inactive</option>
                                                                </select>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('admin.winstatus',['id'=> $gallery->id]) }}" method="post">
                                                                @csrf
                                                                <select name="status" id="" class="form-select form-select-sm" onchange="this.form.submit()">
                                                                    <option value="active" >Active</option>
                                                                    <option value="inactive" {{ ($gallery->status == 0) ? "selected" : '' }}>Inactive</option>
                                                                </select>
                                                            </form>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ $gallery->link }}" target="_blank">View</a>
                                                        </td>
                                                        <td class="d-flex justify-content-center">
                                                            <a href="{{   route('admin.wings', ['id' => $gallery->id])  }}"
                                                                class="btn btn-info p-1 me-1 ">
                                                                <i class="fas fa-edit iconsize"></i>
                                                            </a>
                                                            <form
                                                                action="{{ route('admin.wings.delete', ['id' => $gallery->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                <!-- <input type="submit" value="Delete"> -->
                                                                <button type="submit"
                                                                    class="btn btn-danger p-1 deleteBtn"><i
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
            </div>
        </div>



    </div>
</div>
@endsection

@push('script')
    <script src="{{ asset('assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        const imageInput = document.getElementById('imageInput');
        const previewImage = document.getElementById('previewImage');

        imageInput.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                };

                reader.readAsDataURL(file);
            }
        })

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

        $(document).ready(function () {
            $("#basic-datatables").DataTable({
                sort: false
            });
        })
    </script>

@endpush