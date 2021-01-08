@extends('layouts.adminlayout')
@section('title')Users List @endsection
@section('css')
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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Users-Details</h5>

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
                        <th>name</th>
                        <th>email</th>
                        <th>image</th>
                        <th>action</th>

                    </tr>





                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td> <img src="{{asset('uploads/'.$user->images->first()->name)}}" style="width:60px;"class="img-thumbnail" alt=""></td>

                                <td>

                                <form class="d-inline form-inline delete" action="{{ route('users.destroy',$user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="delete" class="btn  btn-sm btn-clean  la la-trash" style="font-size: 21px;color: #7a7a7a;" ></button>
                                </form>


                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-clean btn-icon" title="edit">
                                <i class="la la-edit" style="font-size: 21px;color: #7a7a7a;"></i>	</a>
                            </td>



                        </tr>
                    @endforeach
                    </tbody>

                </table>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
    </div>


@endsection


