@extends('layout.app')
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>არსებული მოთამაშეები</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>

              <li class="breadcrumb-item active">არსებული მოთამაშეები</li>
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
                    <h5>ძებნა პირადობის ნომრით</h5>
                  </div>
                  <div class="card-body">
                    <form class="needs-validation" novalidate="" action="{{ route('search') }}">
                      <div class="row g-3">
                        <div class="col-md-12">
                          <label class="form-label" for="validationCustom01">პირადი ნომერი</label>
                          <input class="form-control" id="validationCustom01" type="number" placeholder="შეიყვანეთ პირადი ნომერი" name="player_piradi_nomeri">
                        </div>
                        <div class="col-md-12">
                          <label class="form-label" for="validationCustom01">სახელი, გვარი</label>
                          <input class="form-control" id="validationCustom01" type="text" placeholder="შეიყვანეთ სახელი, გვარი" name="player_saxeli">
                        </div>
                      <br>
                      <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">ძებნა</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
          <div class="row">
              <div class="col-sm-12">
              <div class="card">
                    <div class="card-header">
                      <h5>ძებნა თარიღით</h5>
                    </div>
                    <div class="card-body">
                      <form class="needs-validation" novalidate="" action="{{ route('search_bydate') }}">
                        <div class="row g-3">
                          <div class="col-md-12">
                            <label class="form-label" for="validationCustom01">შეიყვანეთ თარიღი</label>
                            <input class="form-control" id="validationCustom01" type="date" placeholder="შეიყვანეთ პირადი ნომერი" name="date">
                          </div>
                        <br>
                        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">ძებნა</button>
                      </form>
                    </div>
                  </div>
              </div>
          </div>
            <div class="card">
              <div class="card-header">
                <h5>ინფორმაცია მოთამაშეზე</h5>
              </div>
              <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">შემოსვლის თარიღი, დრო</th>
                          <th scope="col">სახელი, გვარი</th>
                          <th scope="col">პირადი ნომერი</th>
                          <th scope="col">პასპორტის ტიპი</th>
                          <th scope="col">პირადობის ნომერი</th>
                          <th scope="col">შემოსვლის გატარება</th>
                          <th scope="col">შემოსვლის ისტორია</th>
                          <th scope="col">რედაქტირება </th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($info as $i)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $i->player_shemosvla_date }}</td>
                          <td>{{ $i->player_saxeli }}</td>
                          <td>{{ $i->player_piradi_nomeri }}</td>
                          @if($i->passport_type == 1)
                          <td>პირადობა</td>
                          @endif
                          @if($i->passport_type == 2)
                          <td>პასპორტი</td>
                          @endif
                          @if($i->passport_type == 3)
                          <td>საზღვარგარეთის პასპორტი</td>
                          @endif
                          <td>{{ $i->piradobis_nomeri }}</td>
                          <td>
                            <a href="{{Request::root()}}/shemosvlis_gatareba/{{ $i->id }}"><button type="button" class="btn btn-sm btn-success">შემოსვლის გატარება</button></a>

                            
                           </td>
                           <td>
                            <a href="{{Request::root()}}/player_enter_details/{{ $i->id }}"><button type="button" class="btn btn-sm btn-secondary">ისტორია</button></a>

                          </td>
                          <td>
                            <a href="{{Request::root()}}/edit_player/{{ $i->id }}"><button type="button" class="btn btn-sm btn-warning">რედაქტირება</button></a>
                          </td>
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