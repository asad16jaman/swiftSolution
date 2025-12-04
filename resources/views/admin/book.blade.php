@extends('admin.layout.app')

@section('title', 'Service Booking Page')

@section('pageside')
    @include('admin.layout.sidebar', ['page' => 'book'])
@endsection

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

@section('bodyContent')

    <div class="container">
        <div class="page-inner" style="padding:0px 10px!important">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header  bg-primary text-white p-1">
                            <h6 class="">All Message</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                    <thead class="headbg">
                                        <tr role="row bg-dark">
                                            <th style="width: 136.031px;">SL NO:</th>
                                            <th >Service Nmae</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>People</th>
                                            <!-- <th>Date</th> -->
                                            <!-- <th>Time</th> -->
                                            <th style="width: 100.031px;">Message</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse($message as $msg)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1">{{ $loop->iteration }}</td>
                                                <td>{{ $msg->serviceName }}</td>
                                                <td>{{ $msg->name }}</td>
                                                <td>{{ $msg->phone ?? "Not Found" }}</td>
                                                <td>{{ $msg->people ?? "Not Found" }}</td>
                                                {{-- <td>{{ $msg->book_date ?? "Not Found" }}</td>
                                                <td>{{ $msg->book_time ?? "Not Found" }}</td> --}}
                                                <td>
                                                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal{{ $msg->id }}">
                                                        View
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $msg->id }}" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                        {{ $msg->name }}</h1>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div>
                                                                        <p>Book Date : {{ $msg->book_date }}</p>
                                                                        <p>Book Time : {{ $msg->book_time }}</p>
                                                                    </div>
                                                                    <h3>Message : </h3>
                                                                    <p>{!! $msg->message !!}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $msg->created_at->format('d-m-Y h:ia') }}</td>
                                                <td class="d-flex justify-content-center">
                                                    <form action="{{ route('admin.message.delete', ['id' => $msg->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <!-- <input type="submit" value="Delete"> -->
                                                        <button type="button" class="btn btn-danger p-1 deleteBtn"><i
                                                                class="fas fa-trash-alt iconsize"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <p>there is no Message</p>
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
    <!-- Datatables -->
    <script src="{{ asset('assets/admin/js/plugin/datatables/datatables.min.js') }}"></script>
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

        $(document).ready(function () {
            $("#basic-datatables").DataTable({
                sort: false
            });
        })

         
    </script>

@endpush