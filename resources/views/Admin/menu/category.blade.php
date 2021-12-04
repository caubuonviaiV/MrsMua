@extends('admin.layout.main')

@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <!-- Body: Body -->
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div
                        class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0"> {{ $title }}</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <button type="button" class="btn btn-dark btn-set-task w-sm-100" data-bs-toggle="modal"
                                data-bs-target="#tickadd"><i class="icofont-plus-circle me-2 fs-6"></i>Thêm danh mục</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row end  -->
            {{-- List --}}
            <div class="row clearfix g-3">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 50px">Tickit Id</th>
                                        <th>Subject</th>
                                        <th>Assigned</th>
                                        <th>Created Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
    
                                        {!! \App\Helpers\Helper::menu($menus) !!}

                                        {{-- 
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary"
                                                    data-bs-toggle="modal" data-bs-target="#edittickit"><i
                                                        class="icofont-edit text-success"></i></button>
                                                <button type="button" class="btn btn-outline-secondary deleterow"><i
                                                        class="icofont-ui-delete text-danger"></i></button>
                                            </div>
                                        </td> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Row End -->
        </div>
    </div>

    <!-- Modal Members-->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="addUserLabel">Employee Invitation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="inviteby_email">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email address" id="exampleInputEmail1"
                                aria-describedby="exampleInputEmail1">
                            <button class="btn btn-dark" type="button" id="button-addon2">Sent</button>
                        </div>
                    </div>
                    <div class="members_list">
                        <h6 class="fw-bold ">Employee </h6>
                        <ul class="list-unstyled list-group list-group-custom list-group-flush mb-0">
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div
                                    class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Rachel Carr(you)</h6>
                                        <span class="text-muted">rachel.carr@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <span class="members-role ">Admin</span>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a></li>
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div
                                    class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Lucas Baker<a href="#"
                                                class="link-secondary ms-2">(Resend invitation)</a></h6>
                                        <span class="text-muted">lucas.baker@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="icofont-check-circled"></i>

                                                        <span>All operations permission</span>
                                                    </a>

                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                        <span>Only Invite & manage team</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="icofont-ui-settings  fs-6"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#"><i
                                                            class="icofont-delete-alt fs-6 me-2"></i>Delete Member</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item py-3 text-center text-md-start">
                                <div
                                    class="d-flex align-items-center flex-column flex-sm-column flex-md-column flex-lg-row">
                                    <div class="no-thumbnail mb-2 mb-md-0">
                                        <img class="avatar lg rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                    </div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <h6 class="mb-0  fw-bold">Una Coleman</h6>
                                        <span class="text-muted">una.coleman@gmail.com</span>
                                    </div>
                                    <div class="members-action">
                                        <div class="btn-group">
                                            <button type="button" class="btn bg-transparent dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Members
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="icofont-check-circled"></i>

                                                        <span>All operations permission</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fs-6 p-2 me-1"></i>
                                                        <span>Only Invite & manage team</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-group">
                                            <div class="btn-group">
                                                <button type="button" class="btn bg-transparent dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="icofont-ui-settings  fs-6"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="icofont-ui-password fs-6 me-2"></i>ResetPassword</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="icofont-chart-line fs-6 me-2"></i>ActivityReport</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="icofont-delete-alt fs-6 me-2"></i>Suspend member</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="#"><i
                                                                class="icofont-not-allowed fs-6 me-2"></i>Delete Member</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Tickit-->
    <div class="modal fade" id="tickadd" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="leaveaddLabel"> Thêm danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="deadline-form">
                        <form action="/admin/menus/add" method="POST">
                        
                            <div class="mb-3">
                                <label class="form-label">Tên danh mục</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Danh mục</label>
                                <select class="form-select" name="parent_id">
                                    <option value="0"> Danh Mục Cha </option>
                                        @foreach($menus as $menu)
                                            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mô tả</label>
                                <textarea class="form-control" name="description" rows="3" placeholder="Nội dung mô tả"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Mô tả chi tiết</label>
                                <textarea class="form-control" name="content" id="content" rows="3" placeholder="Nội dung mô tả chi tiết"></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Kích hoạt</label>
                                 <div>
                                     <input type="radio" id="active" value="1" name="active" checked="">
                                     <label for="active">Có</label>
                                 </div>
                                 <div>
                                    <input type="radio" id="no_active" value="0" name="active">
                                    <label for="no_active">Không</label>
                                </div>
                            </div>


                                    {{-- <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="list-group1">
                                        <label class="form-check-label" for="list-group1">Kích hoạt</label>
                                    </div> --}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Tạo</button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Tickit-->
    <div class="modal fade" id="' . $menu->id . '" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="edittickitLabel"> Tickit Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="sub1" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="sub1" value="punching time not proper">
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                                <div class="col">
                                    <label for="depone11" class="form-label">Assign Name</label>
                                    <input type="text" class="form-control" id="depone11" value="Victor Rampling">
                                </div>
                                <div class="col">
                                    <label for="deptwo56" class="form-label">Creted Date</label>
                                    <input type="date" class="form-control" id="deptwo56" value="2021-02-25">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select">
                            <option selected>Completed</option>
                            <option value="1">In Progress</option>
                            <option value="2">Wating</option>
                            <option value="3">Decline</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary">sent</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
<script>
    CKEDITOR.replace( 'content' );
</script>
@endsection
