@extends('Layouts.adminlayout')
@section('title' )CreateUser @endsection
@section('subheader')


    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">AddNewUser</h5>
                <!--end::Title-->
                <!--begin::Separator-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                <!--end::Separator-->
                <!--begin::Search Form-->

            </div>
            <!--end::Details-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Button-->
                <!--end::Button-->
                <!--begin::Dropdown-->
                <!--end::Dropdown-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
    @endsection



@section('content')


    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid"  >
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom card-transparent">
        <div class="card-body p-0">
            <!--begin::Wizard-->
            <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">

                <!--begin::Card-->
        <div class="card card-custom card-shadowless rounded-top-0">
            <!--begin::Body-->
            <div class="card-body p-0">
                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-10">
                        <!--begin::Wizard Form-->
    <form action="{{route('users.store')}}" method="post" class="form-horizontal"
          enctype="multipart/form-data" id ="upload_form">
        @csrf
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <!--begin::Wizard Step 1-->
               <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                    <h5 class="text-dark font-weight-bold mb-10">UserDetails
                    </h5>
                    <!--begin::Group-->



                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-left">Image</label>
                        <div class="col-lg-9 col-xl-9">
                            <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                <div class="image-input-wrapper" >
                                    <img  id="avatar_upload" src="{{asset('assets/media/users/100_6.jpg')}}" width="120" height="120" alt="your image" />
                                    @error('image')
                                    <p class= "text-danger">{{$message}}
                                    @enderror

                                    </div>
                                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                    <i class="fa fa-pen icon-sm text-muted"></i>
                                    <input id="avatar" type="file" name="image" accept=".png, .jpg, .jpeg" onchange="readURL(this); " />
                                </label>
                                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                    </span>
                            </div>
                        </div>
                    </div>

                    <!--end::Group-->
                    <!--begin::Group-->
                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">name</label>
                        <div class="col-lg-9 col-xl-9">
                            <input class="form-control form-control-solid form-control-lg" name="name" type="text"  value="{{old('name')}}" />
                            @error('name')
                            <p class= "text-danger">{{$message}}
                            @enderror
                        </div>
                    </div>

                   <div class="form-group row">
                       <label class="col-xl-3 col-lg-3 col-form-label">email</label>
                       <div class="col-lg-9 col-xl-9">
                           <div class="input-group input-group-solid input-group-lg">
                               <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                               </div>
                               <input type="text" class="form-control form-control-solid form-control-lg" name="email"  value="{{old('email')}}" />


                           </div>
                           @error('email')
                           <p class= "text-danger">{{$message}}
                           @enderror
                       </div>
                   </div>





                   <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">password</label>
                        <div class="col-lg-9 col-xl-9">
                            <input type="password" class="form-control form-control-solid form-control-lg" name="password" type="text" value="{{old('password')}}" />
                            @error('password')
                            <p class= "text-danger">{{$message}}
                            @enderror
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label">PasswordConfirmation</label>
                        <div class="col-lg-9 col-xl-9">
                            <input type="password"class="form-control form-control-solid form-control-lg" name="password_confirmation" type="text" value="{{old('password_confirmation')}}" />

                        </div>
                    </div>






                </div>

                <div class="card-footer pb-0">
                    <div class="row">
                        <div class="col-xl-2"></div>
                        <div class="col-xl-7">
                            <div class="row">
                                <div class="col-3"></div>
                                <div class="col-9">
                                    <button type ="submit" class="btn btn-light-primary font-weight-bold" >save</button>
                                    <a href="{{route('users.index')}}" class="btn btn-clean font-weight-bold">cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
                        <!--end::Wizard Form-->
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </div>
                <!--end::Card-->
            </div>
            <!--end::Wizard-->
        </div>
    </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
    @endsection


@section('js')


    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatar_upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(document).ready(function() {
            $('#select_country_code').select2();
        });
    </script>




    @endsection
