@extends('dashboard.layouts.master')

@section('title')
    Admin Panel Of NetExperts
@endsection

@section('css')


@endsection




@section('content')
    <div class="row">
        <div class="col-lg-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> <i class="fa-solid fa-house"></i></a></li>
                    <li class="breadcrumb-item active" aria-current="page">home</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="content-wrapper">

        <div class="row mb-4 ">
            <div class="col-md-4">
                <div class="welcome-block">
                    <h4>Good to see you, mr saed 👋</h4>
                    <p>You came 15 minutes early today.</p>
                </div>
            </div>
        </div>

        <div class="row analytics-section">
            <div class="col-md-3">
                <div class="anlytics-block-item">
                    <h4>Total Employee</h4>
                    <p>5</p>
                    <div class="d-flex">
                        <div class="paid mr-4">
                            Paid <span>5</span>
                        </div>
                        <div class="unpaid">
                            Unpaid <span>5</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="anlytics-block-item">
                    <h4>Today Absents</h4>
                    <p>7</p>
                    <div class="d-flex">
                        <div class="paid mr-4">
                            Paid <span>2</span>
                        </div>
                        <div class="unpaid">
                            Unpaid <span>1</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="anlytics-block-item">
                    <h4>Today leave</h4>
                    <p>4</p>
                    <div class="d-flex">
                        <div class="paid mr-4">
                            Paid <span>3</span>
                        </div>
                        <div class="unpaid">
                            Unpaid <span>1</span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="anlytics-block-item latest">
                    <h4>Leave request pending</h4>
                    <p>1</p>
                    <div class="d-flex">
                        <div class="paid mr-4">
                            Paid <span>1</span>
                        </div>
                        <div class="unpaid">
                            Unpaid <span>1</span>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="time-log ">
            <div class="container-fluid">
                <h4 class="mb-4">Time Log</h4>
                <div class="row">
                    <div class="col-md-6 today">
                        <div class="time-log-block-item">
                            <h4 class="mb-3">Today</h4>

                            <div class="d-flex justify-content-between">
                                <div class="time-block-item">
                                    <h5>08:00</h5>
                                    <p>Scheduled</p>
                                </div>

                                <div class="time-block-item">
                                    <h5>08:00</h5>
                                    <p>Scheduled</p>
                                </div>

                                <div class="time-block-item">
                                    <h5>08:00</h5>
                                    <p>Scheduled</p>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="anlytics-block-item latest">
                            <h4>This month</h4>

                            <div class="row mb-4">
                                <div class="progress-item col-md-5">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="">
                                            <span class="text-gray font-weight-500">Total</span>
                                        </div>
                                        <div class="">
                                            <span class="font-weight-500">216 hours</span>
                                        </div>

                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class=" progress-item col-md-5 offset-lg-1">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="">
                                            <span class="text-gray font-weight-500">Total</span>
                                        </div>
                                        <div class="">
                                            <span class="font-weight-500">216 hours</span>
                                        </div>

                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="progress-item col-md-5">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="">
                                            <span class="text-gray font-weight-500">Total</span>
                                        </div>
                                        <div class="">
                                            <span class="font-weight-500">216 hours</span>
                                        </div>

                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-item col-md-5 offset-lg-1">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div class="">
                                            <span class="text-gray font-weight-500">Total</span>
                                        </div>
                                        <div class="">
                                            <span class="font-weight-500">216 hours</span>
                                        </div>

                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>




        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Announcements</p>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table  class="display expandable-table" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Start date</th>
                                            <th>End date</th>
                                            <th>Description</th>
                                        </tr>

                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Scrum Master</td>
                                                <td>Dec 4, 2013 21:42</td>
                                                <td>Dec 7, 2013 23:26</td>
                                                <td>Corrected item alignment</td>

                                            </tr>
                                            <tr>
                                                <td>Software Tester</td>
                                                <td>Dec 4, 2013 21:42</td>
                                                <td>Dec 7, 2013 23:26</td>
                                                <td>Corrected item alignment</td>

                                            </tr>
                                            <tr>
                                                <td>Software Developer</td>
                                                <td>Dec 4, 2013 21:42</td>
                                                <td>Dec 7, 2013 23:26</td>
                                                <td>Corrected item alignment</td>

                                            </tr>
                                            <tr>
                                                <td>UI/UX Designer</td>
                                                <td>Dec 4, 2013 21:42</td>
                                                <td>Dec 7, 2013 23:26</td>
                                                <td>Corrected item alignment</td>

                                            </tr>
                                            <tr>
                                                <td>Ethical Hacker</td>
                                                <td>Dec 4, 2013 21:42</td>
                                                <td>Dec 7, 2013 23:26</td>
                                                <td>Corrected item alignment</td>

                                            </tr>



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

@endsection



@section('js')
    <script src="https://kit.fontawesome.com/06c31083be.js" crossorigin="anonymous"></script>
@endsection
