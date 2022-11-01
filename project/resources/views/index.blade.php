@extends('layout.app')
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-6">
            <h3>არსებული დავალებები</h3>
          </div>
          <div class="col-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">დავალებები</li>
              <li class="breadcrumb-item active">არსებული დავალებები</li>
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
            <div class="card">
              <div class="card-header">
                <h5>აქტიური დავალებები</h5>
              </div>
              <div class="card-block row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class="table-light">
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">დავალება</th>
                          <th scope="col">დამატების თარიღი</th>
                          <th scope="col">ცვლილება</th>
                          <th scope="col">წაშლა</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($getTasks as $task)
                        <tr>
                          <th scope="row">{{ $loop->iteration }}</th>
                          <td>{{ $task->title }}</td>
                          <td>{{ $task->date }}</td>
                          <td><a href="{{ route('tasks.edit', $task->id) }}"><button class="btn btn-secondary active" type="button" >რედაქტირება</button></a></td>
                          <td>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="post">
                              @csrf
                              @method('DELETE')
                              <input type="submit" class="btn btn-danger active" value="წაშლა">
                            </form>
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
      <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>ცნობარის დამატება</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('tasks.store') }}">
                                    @csrf
                                    <div class="mb-3 m-form__group">
                                        <label class="form-label">დავალების აღწერა:</label>
                                        <input class="form-control" type="text" placeholder="აღწერეთ დავალება" name="title">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary m-r-15" type="submit">დამატება</button>
                    </div>
                    </form>
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