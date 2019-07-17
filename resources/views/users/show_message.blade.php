@extends('layouts.user')
@section('content')
<div class="container-fluid">
            <!-- Main content starts -->
            <div >
                <!-- Header Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Inbox</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Apps</a>
                                </li>
                                <li class="breadcrumb-item"><a href="read-mail.html">Read Mail</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- Header end -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-12">
                                        <div class="list-group compose-list-group">
                                            <a href="inbox.html" class="list-group-item active">
                                                <i class="icofont icofont-download-alt"></i> Inbox <b class="m-l-5">(7)</b>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <i class="icofont icofont-ui-delete"></i> Trash
                                                <b class="m-l-5">(290)</b>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-12">
                                        <div class="email-icon">
                                            <div class="btn-group waves-effect waves-light" role="group" >
                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-inbox"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-exclamation-circle"></i>
                                                </button>
                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-ui-delete"></i>
                                                </button>
                                            </div>
                                            <div class="dropdown-primary dropdown m-r-10">
                                                <button class="btn btn-primary dropdown-shadow dropdown-toggle waves-effect waves-light text-capitalize" type="button" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="icofont icofont-ui-folder"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">Something else here</a>
                                                </div>
                                            </div>

                                            <div class="dropdown-primary dropdown">
                                                <button class="btn btn-primary dropdown-shadow dropdown-toggle waves-effect waves-light text-capitalize" type="button" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">More
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdown1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                    <a class="dropdown-item waves-light waves-effect" href="#">Action</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">Another action</a>
                                                    <a class="dropdown-item waves-light waves-effect" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div>
                                            <div class="card email-card">
                                                <div class="card-header">
                                                    <h5 class="card-header-text text-capitalize d-inline-block">Here you have new opportunity...</h5>
                                                    <h6 class="f-right">08:23 AM</h6>
                                                </div>
                                                <div class="card-block">
                                                    <div class="media m-b-20">
                                                        <div class="mr-3 photo-table">
                                                            <a href="#">
                                                                <img class="media-object rounded-circle" src="{{asset('assets/images/avatar-3.png')}}" alt="E-mail User">
                                                            </a>
                                                        </div>
                                                        <div class="media-body photo-contant">

                                                                <a href="#"><h6 class="user-name txt-primary">John Doe</h6></a>
                                                                <a class="user-mail txt-muted" href="#"><h6>From:johndoe1543@gmail.com</h6></a>

                                                            <div>
                                                                <h6 class="email-welcome-txt">Hello Dear...</h6>
                                                                <p class="email-content">
                                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar,
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid ends -->

@endsection