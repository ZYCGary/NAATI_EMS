@extends('layouts.app')

@section('title', $user->name . '\'s profile')

@section('content')

    <div class="row">

        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="https://fsdhubcdn.phphub.org/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h4><strong>Enrolled on</strong></h4>
                            <p>January 01 1901</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('users.edit', Auth::id()) }}" class="edit">Edit</a>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">

            {{-- Basic Information --}}
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4><strong>Basic Information</strong></h4>
                    <dl>
                        <div>
                            <dt>Name</dt>
                            <dd>{{ $user->name }}</dd>
                        </div>
                        <div>
                            <dt>Passport No.</dt>
                            <dd>{{ $user->passport_no }}</dd>
                        </div>
                        <div>
                            <dt>Gender</dt>
                            <dd>{{ $user->gender }}</dd>
                        </div>
                        <div>
                            <dt>Birthday</dt>
                            <dd>{{ $user->birthday }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
            <hr>

            {{-- Contact Information --}}
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4><strong>Course Information</strong></h4>
                    <dl>
                        <div>
                            <dt>Email</dt>
                            <dd>{{ $user->email }}</dd>
                        </div>
                        <div>
                            <dt>Phone</dt>
                            <dd>{{ $user->phone }}</dd>
                        </div>
                        <div>
                            <dt>Address</dt>
                            <dd>{{ $user->address }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
            <hr>

            {{-- Course Information --}}
            <div class="panel panel-default">
                <div class="panel-body">
                    <h4><strong>Course Information</strong></h4>
                    <dl>
                        <div>
                            <dt>SID</dt>
                            <dd>{{ $user->sid }}</dd>
                        </div>
                        <div>
                            <dt>Class</dt>
                            <dd>{{ $user->class }}</dd>
                        </div>
                        <div>
                            <dt>Teacher</dt>
                            <dd></dd>
                        </div>
                        <div>
                            <dt>Group</dt>
                            <dd>{{ $user->group }}</dd>
                        </div>
                    </dl>
                </div>
            </div>

        </div>
    </div>
@stop
