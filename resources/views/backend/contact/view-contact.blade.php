@extends('backend.layouts.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Services Management</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Services </li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-md-12">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card">
            <div class="card-header">
              <h3>SLider list
                <a class="btn btn-success float-right" href="{{route('contacts.add')}}"> <i class="fa fa-plus-circle"></i> Add Services</a>
              </h3>
            </div><!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Address </th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Facebook</th>
                    <th> Twitter</th>
                    <th>Youtube </th>
                    <th>Google_plus</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($allData as $key=> $contact)
                  <tr>
                    <td>{{$key+1}}</td>
                      <td>{{$contact->address}}</td>
                      <td>{{$contact->mobile_no}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->facebook}}</td>
                      <td>{{$contact->twitter}}</td>
                      <td>{{$contact->youtube}}</td>
                      <td>{{$contact->google_plus}}</td>
                      <td> <a title="edit" class="btn btn-sm btn-primary" href="{{route('contacts.edit',$contact->id)}}"> <i class="fa fa-edit"> </i> </a>
                        <a title="delete" id="delete" class="btn btn-sm btn-danger" href="{{route('contacts.delete',$contact->id)}}"> <i class="fa fa-trash"> </i></a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

          </div>
          <!-- /.card -->

          <!-- /.card -->
        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
