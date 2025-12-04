@extends('admin.layout.app')

@section('title', 'Create Page')

@section('style')
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> -->
    <style>
        .modal-backdrop {
            display: 0;
        }

        .note-modal {
            z-index: 999999;
        }

        .table>tbody>tr>td {
            padding: 0px !important;
            margin-bottom: 2px;
        }

        .iconsize {
            font-size: 15px;
        }

        .profileImg {
            /* width: 150px; */
            width: 100%;
            height: 70px;
            object-fit: contain;
            /* border: 2px dashed #ccc; */
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
            padding: 1px 0px !important;
        }
    </style>
@endsection

@section('pageside')
    @include('admin.layout.sidebar', ['page' => 'about'])
@endsection

@section('bodyContent')
    <div class="container">
        <div class="page-inner">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-1  bg-primary text-white">
                            <h6 class="">Create Page</h6>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body p-3 ">
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="row mb-2">
                                            <div class="col-md-12 col-12">
                                                <label for="email2">Page Name :</label>
                                                <input type="text" class="form-control p-1 @error('pagename') is-invalid
                                                @enderror" name="pagename"
                                                    value="{{  old('pagename', optional($editPage)->pagename) }}"
                                                    placeholder="Enter Name" {{ $editPage ? 'readonly' : '' }}>
                                                @error('pagename')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="row mb-2">
                                            <div class="col-md-12 col-12">
                                                <label for="email2">Title :</label>
                                                <input type="text" class="form-control p-1 @error('title') is-invalid
                                                @enderror" name="title"
                                                    value="{{  old('title', optional($editPage)->title) }}"
                                                    placeholder="Enter Page Title">
                                                @error('title')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="row">
                                            <div class="col-4 d-flex">
                                                <!-- (placeholder) -->
                                                <img id="previewImage"
                                                    src="{{ ($editPage && $editPage->picture) ? asset('storage/' . $editPage->picture) : asset('assets/admin/img/demoUpload.jpg') }}"
                                                    alt="Demo Image" class="profileImg" style="">
                                            </div>
                                            <div class="col-8">
                                                <label for="imageInputd" style="cursor: pointer;">
                                                    Thumbnail
                                                </label>
                                                <!-- hidden input -->
                                                <input type="file" class="form-control form-control-sm" name="picture"
                                                    id="imageInput" accept="image/*">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2 mt-2 ms-2">

                                    <div class="col-md-8 col-12">
                                        <label for="long_Description">Content :</label>
                                        <textarea name="description"
                                            class="form-control  $error('description') is-invalid $enderror"
                                            id="description">{{ old('description', optional($editPage)->description) }}</textarea>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="row mb-2">
                                            <div class="col-md-12 col-12">
                                                <label for="email2">Button Text :</label>
                                                <input type="text" class="form-control p-1 @error('button') is-invalid
                                                @enderror" name="button"
                                                    value="{{  old('button', optional($editPage)->button) }}"
                                                    placeholder="Button Text">
                                                @error('button')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <input type="submit" value="Submit" class="btn btn-primary me-3 p-2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  bg-primary text-white p-1">
                            <h6>All Pages</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead class="headbg">
                                        <tr role="row bg-dark">
                                            <th style="width: 66.031px;">SL NO:</th>
                                            <th style="width: 66.031px;">Image</th>
                                            <th style="width: 250.031px;">Name</th>
                                            <th style="width: 256.031px;">Title</th>
                                            <th style="width: 66.031px;">Content</th>
                                            <th>Button</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($pages as $page)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $loop->iteration }}</td>
                                                <td>
                                                    <img class="tablepicture"
                                                        src="{{ $page->picture ? asset('storage/' . $page->picture) : asset('assets/admin/img/no-image2.png') }}"
                                                        alt="user profile picture">
                                                </td>
                                                <td>{{ $page->pagename }}</td>
                                                <td>
                                                    {{ $page->title }}
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm p-1 text-center"
                                                        data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $page->id }}">
                                                        View
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="staticBackdrop{{ $page->id }}"
                                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                        {{ $page->pagename }} Page Content</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    {!! $page->description !!}
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $page->button }}
                                                </td>
                                                <td>
                                                    <form action="{{ route('admin.about.status',['id'=>$page->id]) }}" method="post">
                                                        @csrf
                                                        <select name="status" class="form-select form-select-sm" onchange="this.form.submit()" id="">
                                                            <option value="1">Active</option>
                                                            <option value="0" {{ $page->status == 0 ? 'selected' : '' }}>Inactive</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td class="d-flex justify-content-center">
                                                    <a href="{{ route('admin.about', ['id' => $page->id]) }}"
                                                        class="btn btn-info p-1 me-1">
                                                        <i class="fas fa-edit iconsize"></i>
                                                    </a>
                                                    <form action="{{ route('admin.about.delete', ['id' => $page->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <!-- <input type="submit" value="Delete"> -->
                                                        <button type="button" class="btn btn-danger p-1 deleteBtn"><i
                                                                class="fas fa-trash-alt iconsize"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <p>there is no Page</p>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>
    <script src="{{ asset('assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#description').summernote({
                height: 200,
                disableDragAndDrop: true,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['fontsize', 'color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview']]
                ]
            });
        });
        //for text editor end
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

        $(document).ready(function () {
            $("#basic-datatables").DataTable({
                sort: false
            });
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
    </script>
@endpush