@extends("panel.master")
@section('tital', 'Students List')
@section('content')
<!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Students DataTable</h3>
                  <a href="#"class="float-right"><i class="fas fa-plus-square"data-toggle="tooltip" data-placement="top" title="Add Student"></i></a>
              
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Roles</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                            <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                            <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                          </div>
                         
                        </td>
                      
                        
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0
                        </td>
                        <td>Win 95+</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                            <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                            <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                          </div>
                         
                        </td>
                        
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.5
                        </td>
                        <td>Win 95+</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                            <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                            <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                          </div>
                         
                        </td>
                        
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 6
                        </td>
                        <td>Win 98+</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                            <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                            <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                          </div>
                         
                        </td>
                        
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet Explorer 7</td>
                        <td>Win XP SP2+</td>
                        <td>
                          <div class="d-flex align-items-center">
                            <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                            <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                            <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                          </div>
                         
                        </td>
                        
                        <tr>
                          <td>Trident</td>
                          <td>AOL browser (AOL desktop)</td>
                          <td>Win XP</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                              <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                              <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                            </div>
                           
                          </td>
                          
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 1.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                              <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                              <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                            </div>
                           
                          </td>
                          
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 1.5</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                              <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                              <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                            </div>
                           
                          </td>
                          
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 2.0</td>
                          <td>Win 98+ / OSX.2+</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                              <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                              <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                            </div>
                           
                          </td>
                          
                        </tr>
                        <tr>
                          <td>Gecko</td>
                          <td>Firefox 3.0</td>
                          <td>Win 2k+ / OSX.3+</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <i class="fas fa-eye  p-1"data-toggle="tooltip" data-placement="top" title="View"></i>
                              <i class="fas fa-edit p-1"data-toggle="tooltip" data-placement="top" title="Edit"></i>
                              <i class="fas fa-trash p-1"data-toggle="tooltip" data-placement="top" title="Delete"></i>
                            </div>
                           
                          </td>
                          
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
