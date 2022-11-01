@extends('layout.app')
@section('content')
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>მოთამაშის დამატება</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}"> <i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">მოთამაშის დამატება</li>
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
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>დაამატეთ ახალი მოთამაშე</h5>
                            </div>
                            <div class="card-body">
                                <form class="needs-validation" action="{{ route('add_player_insert') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label class="form-label" for="validationCustom02">სახელი, გვარი</label>
                                            <input class="form-control" id="validationCustom02" type="text"
                                                placeholder="შეიყვანეთ სახელი, გვარი"
                                                name="player_saxeli">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="validationCustom02">პირადი ნომერი</label>
                                            <input class="form-control" id="validationCustom02" type="number"
                                                placeholder="შეიყვანეთ პირადი ნომერი" name="player_piradi_nomeri">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="validationCustom02">პირადობის მოწმობის ტიპი</label>
                                            <select class="form-select" id="validationTooltip04" required="" name="passport_type">
                                                            <option selected="" disabled="" value="">- აირჩიეთ მოწმობის ტიპი -</option>
                                                            <option value="1">პირადობა</option>
                                                            <option value="2">პასპორტი</option>
                                                            <option value="3">საზღვარგარეთის პასპორტი</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="validationCustom02">პირადობის ნომერი</label>
                                            <input class="form-control" id="validationCustom02" type="text"
                                                placeholder="შეიყვანეთ პირადი ნომერი" name="piradobis_nomeri">
                                        </div>

                                        <br>
                                        <button class="btn btn-primary" type="submit" data-bs-original-title=""
                                            title="">დამატება</button>
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
