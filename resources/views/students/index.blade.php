
@extends('students.layout')
@section('content')
<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"/>
      <link rel="stylesheet" href="{{ asset('css/styleabd.css')}}">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/styleadb.css" />
    <title>recycling</title>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold text" href="#">Admin Dashboard</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0 m-3">
            <div class="input-group">
              <input
                class="form-control "
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <!-- -->
              <a
               
                href="logout"
                role="button"
             
              >
              <button type="button" class="btn btn-secondary">Log Out</button>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
               <br>
               <br>
               <br>
              </div>
            </li>
            <li>
              <a href="" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-person-fill"></i></i></span>
                <span>Profile</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                <b>Show</b>
              </div>
            </li>
            <li>

            <a href="adminDashboard" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-caret-left-fill"></i></span>
                <span>Request</span>
              </a>
              <!-- <a
                class="nav-link px-3 sidebar-link"
                data-bs-toggle="collapse"
                href="#layouts"
              >
                <span class="me-2"></span>
                <span>Layouts</span>
               
              </a> -->
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>Dashboard</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
            <a href="adminDashboard" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-caret-left-fill"></i></span>
                <span>Recycling Product</span>
              </a>
            </li>
            <li>
            <a href="adminDashboard" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-caret-left-fill"></i></span>
                <span>Recyclable Product</span>
              </a>
            </li>
            
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Add
              </div>
            </li>
            <li>
            <!-- <div class="col-lg-2">
            <a href="{{ url('/member/create') }}" class="btn btn-success" title="Add New Contact">
                Update Product
            </a>
        </div> -->
            <a href="{{ url('/member/create') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-caret-left-fill"></i></span>
                <span>Add Recycling Product</span>
              </a>
            </li>
            <li>
            <a href="adminDashboard" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-caret-left-fill"></i></span>
                <span  >Add Recycling Product</span>
                <H6 class="p-2"></H6>
                
              </a>
            </li>
            <li>
              
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
    
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h2>Request To Collect Details</h2>
                    </div>
                    <div class="card-body">
                       
                      
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td></td>
                                        <td>{{ $item->mobile }}</td>
  
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm("Confirm delete?")"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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

    <a href="test"></a>
    @endsection
    </body>