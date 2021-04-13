@extends("panel.master")
@section('tital', 'Users List')
@section('content')
<!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">User DataTable</h3>
                  <a href="#"class="float-right"><i class="fas fa-plus-square"data-toggle="tooltip" data-placement="top" title="Add User"></i></a>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    @foreach ($users as $key => $user)
                    <tbody>
                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                         <td>{{ $user->email }}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <a class="text-dark" href="{{ url('alluser.show',$user->id) }}">
                            <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="Show"></i></a>
                            <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                            <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                          </div>

                        </td>
                        @endforeach
                      </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection
