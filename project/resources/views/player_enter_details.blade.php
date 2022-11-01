@extends('layout.app')
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>მოთამაშის ისტორია</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">კლიენტები</li>
              <li class="breadcrumb-item active">მოთამაშის ისტორია</li>
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
      @if($resulttwo != null)
            <div class="card">
              <div class="card-header">
                <h5>ახალი გატარებული მოთამაშეები</h5>
              </div>
              <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">შემოსვლის დრო</th>
                          <th scope="col">მოთამაშის სახელი</th>
                          <th scope="col">პირადი ნომერი</th>
                          <th scope="col">პირადობის ნომერი</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($resulttwo as $infox)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $infox->player_shemosvla_date }}</td>
                          <td>{{ $infox->player_saxeli }}</td>
                          <td>{{ $infox->player_piradi_nomeri }}</td>
                          <td>{{ $infox->piradobis_nomeri }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @endif
            <div class="card">
              <div class="card-header">
                <h5>მოთამაშეები რომლებიც პირველად არ არიან</h5>
              </div>
              <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">შემოსვლის დრო</th>
                          <th scope="col">მოთამაშის სახელი</th>
                          <th scope="col">პირადი ნომერი</th>
                          <th scope="col">პირადობის ნომერი</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($result as $info)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $info->shemosvlis_dro }}</td>
                          <td>{{ $info->player->player_saxeli }}</td>
                          <td>{{ $info->player->player_piradi_nomeri }}</td>
                          <td>{{ $info->player->piradobis_nomeri }}</td>
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