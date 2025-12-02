@extends('admin.layout.app')

@section('title', 'Service Page')

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
            width: 100%;
            height: 75px;
            object-fit: fill;
            border: 2px dashed #ccc;
            border-radius: 6px;
            max-width: 118px;
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

        .productimages {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .preview-img {
            position: relative;
            display: inline-block;
        }

        .preview-img img {
            width: 70px;
            height: 70px;
            object-fit: cover;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .preview-img .remove-btn {
            position: absolute;
            top: -5px;
            right: -5px;
            background: red;
            color: white;
            border: none;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            font-size: 12px;
            cursor: pointer;
        }
    </style>
@endsection

@section('pageside')
    @include('admin.layout.sidebar', ['page' => 'service'])
@endsection

@section('bodyContent')
    <div class="container">
        <div class="page-inner">
            <div class="card mb-1">
                <div class="card-header p-1  bg-primary text-white">
                    <h6>Create Service</h6>
                </div>
                <form method="post" id="productForm" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">
                            <div class="col-md-1 col-12">
                                <div class="">
                                    <label for="serviceName">Name :</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <input type="text" id="serviceName" class="form-control p-1 @error('name') is-invalid
                                @enderror" name="name" value="{{ old('name', optional($editItem)->name)}}"
                                    placeholder="Enter Service Name">
                                @error('name')
                                    <p class="text-danger">{{  $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-1 col-12">
                                <div class="">
                                    <label for="serviceSlug">Slug :</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <input type="text" class="form-control p-1 @error('slug') is-invalid
                                @enderror" id="serviceSlug" name="slug"
                                    value="{{ old('slug', optional($editItem)->slug)}}" placeholder="Slug">
                                @error('slug')
                                    <p class="text-danger">{{  $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-1 col-12">
                                <div class="">
                                    <label for="">Wign :</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <select name="wing_id" class="form-select form-select-sm" id="">
                                    @foreach ($wings as $wing)
                                        <option value="{{ $wing->id }}" {{ old('wing_id',optional($editItem)->wing_id) == $wing->id ? 'selected' : '' }}>{{ $wing->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">

                            <div class="col-md-1 col-12">
                                <div class="">
                                    <label for="">Thumb :</label>
                                </div>
                            </div>
                            <div class="col-md-3 col-12">
                                <input type="file" name="thum" class="form-control form-control-sm" id="imageInput"
                                    accept="image/*" onchange="previewImage(event,'thumPreview')">

                                <img id="thumPreview"
                                    src="{{ ($editItem && $editItem->thum) ? asset('storage/' . $editItem->thum) : asset('assets/admin/img/demoUpload.jpg') }}"
                                    alt="Demo Image" class="profileImg mt-2" style="">
                            </div>

                            <div class="col-md-1 col-12">
                                <label for="">Sliders :</label>
                            </div>
                            <div class="col-md-7 col-12">
                                <div class="row">
                                    <div class="col-3">
                                        <input type="file" name="slider1" class="form-control form-control-sm"
                                            accept="image/*" onchange="previewImage(event,'sliderpreviewImage1')">

                                        <img id="sliderpreviewImage1"
                                            src="{{ ($editItem && $editItem->slider1) ? asset('storage/' . $editItem->slider1) : asset('assets/admin/img/demoUpload.jpg') }}"
                                            alt="Demo Image" class="profileImg mt-2" style="">
                                    </div>
                                    <div class="col-3">
                                        <input type="file" name="slider2" class="form-control form-control-sm"
                                            accept="image/*" onchange="previewImage(event,'sliderpreviewImage2')">

                                        <img id="sliderpreviewImage2"
                                            src="{{ ($editItem && $editItem->slider2) ? asset('storage/' . $editItem->slider2) : asset('assets/admin/img/demoUpload.jpg') }}"
                                            alt="Demo Image" class="profileImg mt-2" style="">
                                    </div>
                                    <div class="col-3">
                                        <input type="file" name="slider3" class="form-control form-control-sm"
                                            accept="image/*" onchange="previewImage(event,'sliderpreviewImage3')">

                                        <img id="sliderpreviewImage3"
                                            src="{{ ($editItem && $editItem->slider3) ? asset('storage/' . $editItem->slider3) : asset('assets/admin/img/demoUpload.jpg') }}"
                                            alt="Demo Image" class="profileImg mt-2" style="">
                                    </div>
                                    <div class="col-3">
                                        <input type="file" name="slider4" class="form-control form-control-sm"
                                            accept="image/*" onchange="previewImage(event,'sliderpreviewImage4')">

                                        <img id="sliderpreviewImage4"
                                            src="{{ ($editItem && $editItem->slider4) ? asset('storage/' . $editItem->slider4) : asset('assets/admin/img/demoUpload.jpg') }}"
                                            alt="Demo Image" class="profileImg mt-2" style="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="">
                                    <label for="description">Discription :</label>
                                    <textarea name="description" class="form-control" rows="6"
                                        id="description">{{ old('description', optional($editItem)->description) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                        </div>
                    </div>
                </form>
            </div>
            <div class="row pt-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  bg-primary text-white p-1">
                            <h6 class="">All Service</h6>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead class="headbg">
                                        <tr role="row bg-dark">
                                            <th style="width: 70.031px;">SL NO:</th>
                                            <th style="width: 55.875px;">Thumb.</th>
                                            <th style="width: 200.875px;">Slider</th>
                                            <th style="width: 214.469px;">Name</th>
                                            <th style="width: 214.469px;">Wing</th>
                                            <th style="width: 74.469px;">Description</th>
                                            <th style="width: 100.875px;">Status</th>
                                            <th style="width: 81.375px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse($datas as $data)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $loop->iteration }}</td>
                                                <td>
                                                    <img class="tablepicture" src="{{ asset('storage/' . $data->thum) }}"
                                                        alt="Image Not Found">
                                                </td>
                                                <td>
                                                    <div>
                                                        @if($data->slider1)
                                                            <img class="tablepicture" src="{{ asset('storage/' . $data->slider1) }}"
                                                            alt="Image Not Found">
                                                        @endif
                                                        
                                                        @if($data->slider2)
                                                            <img class="tablepicture" src="{{ asset('storage/' . $data->slider2) }}"
                                                            alt="Image Not Found">
                                                        @endif
                                                        
                                                        @if($data->slider3)
                                                            <img class="tablepicture" src="{{ asset('storage/' . $data->slider3) }}"
                                                            alt="Image Not Found">
                                                        @endif
                                                        
                                                        @if($data->slider4)
                                                            <img class="tablepicture" src="{{ asset('storage/' . $data->slider4) }}"
                                                            alt="Image Not Found">
                                                        @endif
                                                        
                                                    </div>
                                                </td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->wing->title }}</td>
                                                <td>


                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $data->id }}">
                                                        View
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $data->id }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $data->name }}</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                   {!! $data->description !!}
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.servicestatus', ['id' => $data->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <select name="status" id="" class="form-select form-select-sm"
                                                            onchange="this.form.submit()">
                                                            <option value="active">Active</option>
                                                            <option value="inactive" {{ ($data->status == 0) ? "selected" : '' }}>
                                                                Inactive</option>
                                                        </select>
                                                    </form>
                                                </td>

                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ route('admin.service', ['id' => $data->id, 'page' => request()->query('page'), 'search' => request()->query('search')]) }}"
                                                        class="btn btn-info p-1 me-1">
                                                        <i class="fas fa-edit iconsize"></i>
                                                    </a>
                                                    <form action="{{ route('admin.service.delete', ['id' => $data->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <!-- <input type="submit" value="Delete"> -->
                                                        <button type="submit" class="btn btn-danger p-1 deleteBtn"><i
                                                                class="fas fa-trash-alt iconsize"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <p>there is no Service</p>
                                        @endforelse
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
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <!-- Datatables -->
    <script src="{{ asset('assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>



        function previewImage(e, prevId) {
            const previewImage = document.getElementById(prevId);
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }





        ClassicEditor
            .create(document.querySelector('#description'), {
            })
            .catch(error => {
                console.error('CKEditor Error:', error);
            });

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




        function slugify(text) {
            return text
                .toString()
                .toLowerCase()
                .trim()
                .replace(/\s+/g, '-')        // space → dash
                .replace(/[^\w\-]+/g, '')    // remove special chars
                .replace(/\-\-+/g, '-');     // multiple dash → single dash
        }

        document.getElementById('serviceName').addEventListener('keyup', function () {
            let title = this.value;
            document.getElementById('serviceSlug').value = slugify(title);
        });

    </script>

@endpush