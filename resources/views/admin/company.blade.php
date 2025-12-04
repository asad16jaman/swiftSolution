@extends('admin.layout.app')

@section('title', 'Company Page')

@section('style')
<style>
 .profileImg{
        width: auto;
        height: 50px; 
        object-fit: cover;
        border: 2px dashed #ccc;
        border-radius: 6px;
        margin-top: 3px;
    }
</style>
@endsection

@section('bodyContent')
    <div class="container">
        <div class="page-inner">
            <div class="card">
                <div class="card-header p-1  bg-primary text-white">
                    <h6>Company Detail</h6>
                </div>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body p-3 ">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email2">Org. Name :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" class="form-control p-1 @error('name') is-invalid @enderror"  name="name" value="{{ old('name',optional($company)->name)}}"
                                            placeholder="Enter Company Name">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="email">Email :</label> 
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="email" class="form-control p-1 @error('email') is-invalid @enderror"  name="email" value="{{ old('email',optional($company)->email)}}"
                                            placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="phone">Phone :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" value="{{ old('phone',optional($company)->phone)}}" name="phone" class="form-control p-1 @error('phone') is-invalid @enderror" id="" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="phone">Highlighter :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="text" value="{{ old('service_time',optional($company)->service_time)}}" name="service_time" class="form-control p-1 @error('service_time') is-invalid @enderror" id="" placeholder="Enter Service Time">
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="phone">Footer Text :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <textarea class="form-control @error('footer_text') is-invalid @enderror" name="footer_text" id="comment" rows="3">{{ old('footer_text',optional($company)->footer_text) }}</textarea>
                                         @error('footer_text')
                                            <p>{{ $message }}</p>
                                         @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                   <div class="col-md-3 col-12 mt-1">
                                         <label for="imageInput3" style="cursor: pointer;">
                                            BreadCrumb
                                        </label>
                                        @error('breadcrumb')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" class="form-control form-control-sm" name="breadcrumb" id="imageInput3" name="image" accept="image/*">
                                        <img id="previewImage3" 
                                                src="{{ ($company && $company->breadcrumb) ? asset('storage/'.$company->breadcrumb) : asset('assets/admin/img/demoUpload.jpg')}}" 
                                                alt="Demo Image" 
                                                class="profileImg"
                                                style="">
                                    </div>
                                </div>
                                 <div class="row mb-2">
                                   <div class="col-md-3 col-12 mt-1">
                                         <label for="imageInput2" style="cursor: pointer;">
                                            Favicon
                                        </label>
                                        @error('favicon')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" class="form-control form-control-sm" name="favicon" id="imageInput2" name="image" accept="image/*">
                                        <img id="previewImage2" 
                                                src="{{ ($company && $company->favicon) ? asset('storage/'.$company->favicon) : asset('assets/admin/img/demoUpload.jpg')}}" 
                                                alt="Demo Image" 
                                                class="profileImg"
                                                style="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Facebook :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                          <input type="text" value="{{ old('facebook',optional($company)->facebook) }}" class="form-control p-1 @error('facebook') is-invalid @enderror" name="facebook" placeholder="Enter facebook Link">
                                    </div>
                                    @error('facebook')
                                        <p class="text-danger text-end">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row mb-2">
                                    <!-- //Instagram is replased by whatsapp  -->
                                    <div class="col-md-3 col-12">
                                        <label for="password">Instagram :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                          <input type="text" class="form-control p-1 @error('instagram') is-invalid @enderror" value="{{ old('instagram',optional($company)->instagram) }}" name="instagram" placeholder="Enter Instagram">
                                    </div>
                                    @error('instagram')
                                        <p class="text-danger text-end">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <label for="password">Twiter :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                          <input type="text" class="form-control p-1 @error('twiter') is-invalid @enderror" value="{{ old('twiter',optional($company)->twiter) }}" name="twiter" placeholder="Enter Twiter">
                                    </div>
                                    @error('twiter')
                                        <p class="text-end text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row mb-2">
                                    <!-- //Linkdin is replased by wechat  -->
                                    <div class="col-md-3 col-12">
                                        <label for="password">Linkdin :</label>
                                    </div>
                                    <div class="col-md-9 col-12">
                                          <input type="text" class="form-control p-1 @error('linkdin') is-invalid @enderror" name="linkdin" value="{{ old('linkdin',optional($company)->linkdin) }}" placeholder="Enter Linkdin Link">
                                    </div>
                                    @error('linkdin')
                                        <p class="text-end text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="phone">Address :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <textarea class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Type Address" rows="2">{{ old('address',optional($company)->address) }}</textarea>
                                         @error('address')
                                            <p>{{ $message }}</p>
                                         @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-3 col-12">
                                        <div class="">
                                            <label for="phone">Map :</label>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <textarea class="form-control @error('map_url') is-invalid @enderror" name="map_url" placeholder="Org. Location" rows="2">{{ old('map_url',optional($company)->map_url) }}</textarea>
                                         @error('map_url')
                                            <p>{{ $message }}</p>
                                         @enderror
                                    </div>
                                </div>
                                <div class="row mb-2">
                                   <div class="col-md-3 col-12 mt-1">
                                         <label for="imageInput" style="cursor: pointer;">
                                            Logo
                                        </label>
                                        @error('logo')
                                            <p>{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="col-md-9 col-12">
                                        <input type="file" class="form-control form-control-sm" name="logo" id="imageInput" name="image" accept="image/*">
                                        <img id="previewImage" 
                                                src="{{ ($company && $company->logo) ? asset('storage/'.$company->logo) : asset('assets/admin/img/demoUpload.jpg')}}" 
                                                alt="Demo Image" 
                                                class="profileImg"
                                                style="">
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
@endsection
@section('pageside')
  @include('admin.layout.sidebar',['page' => 'company'])
@endsection
@push('script')
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
        const imageInput2 = document.getElementById('imageInput2');
        const previewImage2 = document.getElementById('previewImage2');
        imageInput2.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage2.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        })
        const imageInput3 = document.getElementById('imageInput3');
        const previewImage3 = document.getElementById('previewImage3');
        imageInput3.addEventListener('change', function () {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage3.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        })
    </script>
@endpush