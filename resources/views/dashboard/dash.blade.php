@extends('layouts.adminlayout')
@section('title'){{__('admin.CategoryList')}} @endsection
@section('css')
    <link href="{{asset('assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.5')}}" rel="stylesheet"
          type="text/css"/>
@endsection

@section('subheader')



    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">{{__('admin.CategoryDetails')}}</h5>

                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">

            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->

@endsection
@section('content')


    <div class="container">

        @if(session()->has('message'))
            <div class="alert alert-primary">
                <p>{{ session('message') }}</p>
            </div>
    @endif

    <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-body">
                <!--begin: Datatable-->
                <table class="table table-bordered table-hover table-checkable" id="categories_datatables"
                       style="margin-top: 13px !important">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{__('admin.name')}}</th>
                        <th>{{__('admin.image')}}</th>
                        <th>{{__('admin.action')}}</th>

                    </tr>
                    </thead>
                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
    </div>


@endsection


