@extends('layout.app')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>პაროლის შეცვლა</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">პაროლის შეცვლა</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        @if (session('Error'))
        <div class="alert alert-danger">
            {{ session('Error') }}
        </div>
        @endif
        @if (session('Success'))
        <div class="alert alert-success">
            {{ session('Success') }}
        </div>
        @endif
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>შეცვალეთ მომხმარებლის პაროლი</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" action="{{ route('updatepassword') }}"  method="post">
                                    @csrf
                                    @method('patch')
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label" for="validationCustom02">შეიყვანეთ პაროლი</label>
                                            <input class="form-control" id="validationCustom02" type="password"
                                                placeholder="შეიყვანეთ პაროლი"
                                                name="enter_password">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label" for="validationCustom02">გაიმეორეთ პაროლი</label>
                                            <input class="form-control" id="validationCustom02" type="password"
                                                placeholder="გაიმეორეთ პაროლი" name="retry_password">

                                        </div>
                                        <br>
                                        <button class="btn btn-primary" type="submit" data-bs-original-title=""
                                            title="">შეცვლა</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
</div>
<script src="{{Request::root()}}/assets/js/jquery-3.5.1.min.js"></script>
<!-- Bootstrap js-->
<script src="{{Request::root()}}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="{{Request::root()}}/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{Request::root()}}/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="{{Request::root()}}/assets/js/scrollbar/simplebar.js"></script>
<script src="{{Request::root()}}/assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="{{Request::root()}}/assets/js/config.js"></script>
<!-- Plugins JS start-->
<script src="{{Request::root()}}/assets/js/sidebar-menu.js"></script>
<script src="{{Request::root()}}/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="{{Request::root()}}/assets/js/datatable/datatables/datatable.custom.js"></script>
<script src="{{Request::root()}}/assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{Request::root()}}/assets/js/script.js"></script>
<script src="{{Request::root()}}/assets/js/theme-customizer/customizer.js"></script>
@endsection
