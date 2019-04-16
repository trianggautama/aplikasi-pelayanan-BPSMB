@extends('layouts.admin')

@section('title', __('outlet.list'))

@section('content')
        <div class="container-fluid">
            <div class="row">
                <div class="main-header">
                    <h4>Profile</h4>
                    <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Extras</a>
                        </li>
                        <li class="breadcrumb-item"><a href="profile.html">Profile</a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- Header end -->
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="card faq-left">
                        <div class="social-profile">
                            <img class="img-fluid" src="assets/images/social/profile.jpg" alt="">
                            <div class="profile-hvr m-t-15">
                                <i class="icofont icofont-ui-edit p-r-10 c-pointer"></i>
                                <i class="icofont icofont-ui-delete c-pointer"></i>
                            </div>
                        </div>
                        <div class="card-block">
                            <h4 class="f-18 f-normal m-b-10 txt-primary text-center">Josephin Villa</h4>
                            <h5 class="f-14 text-center">Software Engineer</h5>
                            <div class="faq-profile-btn">
                                <button type="button" style="margin-left:20px;" class="btn btn-primary waves-effect waves-light">Follows
                                </button>
                            </div>

                        </div>
                    </div>
                    <!-- end of card-block -->
                </div>
                <!-- end of col-lg-3 -->

                <!-- start col-lg-9 -->
                <div class="col-xl-9 col-lg-8">
                    <!-- Nav tabs -->
                    <div class="tab-header">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Biodata Perusahaan</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#project" role="tab">Edit Data</a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#questions" role="tab">Riwayat Kalibrasi </a>
                                <div class="slide"></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#members" role="tab">Riwayat Pengujian </a>
                                <div class="slide"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- end of tab-header -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                            <div class="card">
                                <div class="card-header"><h5 class="card-header-text">About Me</h5>
                                    <button id="edit-btn" type="button" class="btn btn-primary waves-effect waves-light f-right" >
                                        <i  class="icofont icofont-edit"></i>
                                    </button>
                                </div>
                                <div class="card-block">
                                    <div class="view-info">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="general-info">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table m-0">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Full Name</th>
                                                                    <td>Josephine Villa</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Gender</th>
                                                                    <td>Female</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Birth Date</th>
                                                                    <td>October 25th, 1990</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Marital Status</th>
                                                                    <td>Single</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Location</th>
                                                                    <td>New York, USA</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->

                                                        <div class="col-lg-12 col-xl-6">
                                                            <table class="table">
                                                                <tbody>
                                                                <tr>
                                                                    <th scope="row">Email</th>
                                                                    <td><a href="#!">Demo@phenix.com</a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Mobile Number</th>
                                                                    <td>(0123) - 4567891</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Twitter</th>
                                                                    <td>@phoenixcoded</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Skype</th>
                                                                    <td>phoenixcoded.demo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Website</th>
                                                                    <td><a href="#!">www.demo.com</a></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <!-- end of table col-lg-6 -->
                                                    </div>
                                                    <!-- end of row -->
                                                </div>
                                                <!-- end of general info -->
                                            </div>
                                            <!-- end of col-lg-12 -->
                                        </div>
                                        <!-- end of row -->
                                    </div>
                                    <!-- end of view-info -->
                                </div>
                                <!-- end of card-block -->
                            </div>
                            <!-- end of card-->
                        </div>
                        <!-- end of tab-pane -->
                        <!-- end of about us tab-pane -->

                        <!-- start tab-pane of project tab -->
                        <div class="tab-pane" id="project" role="tabpanel">
                            <div class="row">
                                <!--input sizes starts-->
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header"><h5 class="card-header-text">Input Sizes</h5>
                                            <div class="f-right">
                                                <a href="" data-toggle="modal" data-target="#input-size-Modal"><i class="icofont icofont-code-alt"></i></a>
                                            </div>
                                        </div>

                                        <div class="card-block">
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Nama</label></div>
                                                <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Nama"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Alamat</label></div>
                                                <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Alamat"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Tlp</label></div>
                                                <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="No.Tlp"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">Username</label></div>
                                                <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Isi Jika ingin mengganti username"></div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-2"><label for="InputNormal" class="form-control-label">No Tlp</label></div>
                                                <div class="col-md-10"><input type="text" class="form-control" id="InputNormal"  placeholder="Isi Jika ingin mengganti Password"></div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-right">
                                            <a href="" class="btn btn-inverse-primary">Ubah Data</a>
                                        </div>
                                    </div>
                                </div>
                                <!--input sizes ends-->

                            </div>
                            <!-- end of card-main -->
                        </div>
                        <!-- end of project pane -->

                        <!-- start a question pane  -->

                        <div class="tab-pane" id="questions" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Project Details</h5>
                                    <button type="button" class="btn btn-primary waves-effect waves-light f-right">
                                        + ADD PROJECTS</button>
                                </div>
                                <!-- end of card-header  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center txt-primary pro-pic">Photo</th>
                                                        <th class="text-center txt-primary">Client</th>
                                                        <th class="text-center txt-primary">Start Date</th>
                                                        <th class="text-center txt-primary">End Date</th>
                                                        <th class="text-center txt-primary">Status</th>
                                                        <th class="text-center txt-primary">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success m-t-20">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                            <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success m-t-20">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-warning">Pending</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!-- end of table -->
                                            </div>
                                            <!-- end of table responsive -->
                                        </div>
                                        <!-- end of project table -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                        </div>
                        <!-- end of tab pane question -->

                        <!-- start memeber ship tab pane -->

                        <div class="tab-pane" id="members" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-header-text">Project Details</h5>
                                    <button type="button" class="btn btn-primary waves-effect waves-light f-right">
                                        + ADD PROJECTS</button>
                                </div>
                                <!-- end of card-header  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="project-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="text-center txt-primary pro-pic">Photo</th>
                                                        <th class="text-center txt-primary">Client</th>
                                                        <th class="text-center txt-primary">Start Date</th>
                                                        <th class="text-center txt-primary">End Date</th>
                                                        <th class="text-center txt-primary">Status</th>
                                                        <th class="text-center txt-primary">Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="text-center">
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success m-t-20">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                            <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-success m-t-20">Finish</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-warning">Pending</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-warning">Pending</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <img src="assets/images/avatar-2.png" class="img-circle" alt="tbl">
                                                        </td>
                                                        <td>Web Consultant</td>
                                                        <td>Oct 25th, 2014</td>
                                                        <td>Oct 25th, 2015</td>
                                                        <td class="text-center"><span class="label label-warning">Pending</span>
                                                        </td>
                                                        <td class="faq-table-btn">
                                                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="icofont icofont-ui-edit"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="icofont icofont-eye-alt"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="icofont icofont-ui-delete"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!-- end of table -->
                                            </div>
                                            <!-- end of table responsive -->
                                        </div>
                                        <!-- end of project table -->
                                    </div>
                                    <!-- end of col-lg-12 -->
                                </div>
                                <!-- end of row -->
                            </div>
                            <!-- end of row -->
                        </div>
                        <!-- end of memebership tab pane -->

                    </div>
                    <!-- end of main tab content -->
                </div>
            </div>

        </div>
        <!-- Container-fluid ends -->

@endsection
