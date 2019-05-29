<?php

/* @var $this yii\web\View */
$this->title = 'Theme tests';
?>
<div class="row">
    <!-- task, page, download counter  start -->
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-purple">$30200</h4>
                        <h6 class="text-muted m-b-0">All Earnings</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-bar-chart f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-purple">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-green">290+</h4>
                        <h6 class="text-muted m-b-0">Page Views</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-file-text-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-green">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-red">145</h4>
                        <h6 class="text-muted m-b-0">Task Completed</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-calendar-check-o f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-red">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue">500</h4>
                        <h6 class="text-muted m-b-0">Downloads</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="fa fa-hand-o-down f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-c-blue">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="fa fa-line-chart text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- task, page, download counter  end -->

    <!--  sale analytics start -->
    <div class="col-xl-8 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Sales Analytics</h5>
                <span class="text-muted">Get 15% Off on <a href="https://www.amcharts.com/" target="_blank">amCharts</a> licences. Use code "Phoenixcoded" and get the discount.</span>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div id="sales-analytics" style="height: 400px;"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card">
            <div class="card-block">
                <div class="row">
                    <div class="col">
                        <h4>$256.23</h4>
                        <p class="text-muted">This Month</p>
                    </div>
                    <div class="col-auto">
                        <label class="label label-success">+20%</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <canvas id="this-month" style="height: 150px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card quater-card">
            <div class="card-block">
                <h6 class="text-muted m-b-15">This Quarter</h6>
                <h4>$3,9452.50</h4>
                <p class="text-muted">$3,9452.50</p>
                <h5>87</h5>
                <p class="text-muted">Online Revenue<span class="f-right">80%</span></p>
                <div class="progress">
                    <div class="progress-bar bg-c-blue" style="width: 80%"></div>
                </div>
                <h5 class="m-t-15">68</h5>
                <p class="text-muted">Offline Revenue<span class="f-right">50%</span></p>
                <div class="progress">
                    <div class="progress-bar bg-c-green" style="width: 50%"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  sale analytics end -->

    <!--  project and team member start -->
    <div class="col-xl-8 col-md-12">
        <div class="card table-card">
            <div class="card-header">
                <h5>Projects</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                  <i class="cr-icon fa fa-check txt-default"></i>
                                                </span>
                                        </label>
                                    </div>
                                </div>
                                Assigned</th>
                            <th>Name</th>
                            <th>Due Date</th>
                            <th class="text-right">Priority</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                  </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                    <img src="files/assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                    <div class="d-inline-block">
                                        <h6>John Deo</h6>
                                        <p class="text-muted m-b-0">Graphics Designer</p>
                                    </div>
                                </div>
                            </td>
                            <td>Able Pro</td>
                            <td>Jun, 26</td>
                            <td class="text-right"><label class="label label-danger">Low</label></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                  </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                    <img src="files/assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                    <div class="d-inline-block">
                                        <h6>Jenifer Vintage</h6>
                                        <p class="text-muted m-b-0">Web Designer</p>
                                    </div>
                                </div>
                            </td>
                            <td>Mashable</td>
                            <td>March, 31</td>
                            <td class="text-right"><label class="label label-primary">high</label></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                  </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                    <img src="files/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                    <div class="d-inline-block">
                                        <h6>William Jem</h6>
                                        <p class="text-muted m-b-0">Developer</p>
                                    </div>
                                </div>
                            </td>
                            <td>Flatable</td>
                            <td>Aug, 02</td>
                            <td class="text-right"><label class="label label-success">medium</label></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="chk-option">
                                    <div class="checkbox-fade fade-in-primary">
                                        <label class="check-task">
                                            <input type="checkbox" value="">
                                            <span class="cr">
                                                    <i class="cr-icon fa fa-check txt-default"></i>
                                                  </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-inline-block align-middle">
                                    <img src="files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                                    <div class="d-inline-block">
                                        <h6>David Jones</h6>
                                        <p class="text-muted m-b-0">Developer</p>
                                    </div>
                                </div>
                            </td>
                            <td>Guruable</td>
                            <td>Sep, 22</td>
                            <td class="text-right"><label class="label label-primary">high</label></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="text-right m-r-20">
                        <a href="#!" class=" b-b-primary text-primary">View all Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card ">
            <div class="card-header">
                <h5>Team Members</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="align-middle m-b-30">
                    <img src="files/assets/images/avatar-2.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="align-middle m-b-30">
                    <img src="files/assets/images/avatar-1.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="align-middle m-b-30">
                    <img src="files/assets/images/avatar-3.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="align-middle m-b-30">
                    <img src="files/assets/images/avatar-4.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="align-middle m-b-10">
                    <img src="files/assets/images/avatar-5.jpg" alt="user image" class="img-radius img-40 align-top m-r-15">
                    <div class="d-inline-block">
                        <h6>David Jones</h6>
                        <p class="text-muted m-b-0">Developer</p>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View all Projects</a>
                </div>
            </div>
        </div>
    </div>
    <!--  project and team member end -->

    <!--  whether order-visitor start -->
    <div class="col-xl-6 col-md-12">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center order-visitor-card">
                    <div class="card-block">
                        <h6 class="m-b-0">Total Subscription</h6>
                        <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652</h4>
                        <p class="m-b-0">48% From Last 24 Hours</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center order-visitor-card">
                    <div class="card-block">
                        <h6 class="m-b-0">Order Status</h6>
                        <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>6325</h4>
                        <p class="m-b-0">36% From Last 6 Months</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center order-visitor-card">
                    <div class="card-block">
                        <h6 class="m-b-0">Monthly Earnings</h6>
                        <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>5963</h4>
                        <p class="m-b-0">36% From Last 6 Months</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center order-visitor-card">
                    <div class="card-block">
                        <h6 class="m-b-0">Unique Visitors</h6>
                        <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>652</h4>
                        <p class="m-b-0">36% From Last 6 Months</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fa fa-user f-30 text-c-red"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Happy Customers</h6>
                                <h2 class="m-b-0">5984</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fa fa-lightbulb-o f-30 text-c-blue"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Unique Innovation</h6>
                                <h2 class="m-b-0">325</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card wather-card">
            <div class="nature-card">
                <img src="files/assets/images/widget/wathernature.png" alt="whether image" class="img-fluid main-img">
                <img src="files/assets/images/widget/watherstar1.png" alt="whether image" class="snow1">
                <img src="files/assets/images/widget/watherstar2.png" alt="whether image" class="snow2">
                <img src="files/assets/images/widget/watherbottom.png" alt="whether image" class="bottom-img">
                <div class="nature-cont text-white">
                    <h6>Snow</h6>
                    <h2>-10°</h2>
                    <h6>10:20 AM</h6>
                </div>
            </div>
            <div class="card-block">
                <div class="row text-c-blue">
                    <div class="col">
                        <h6>Sunday</h6></div>
                    <div class="col text-right">-10°<i class="fa fa-snowflake-o m-l-20"></i></div>
                </div>
                <div class="row m-t-15">
                    <div class="col">
                        <h6>Monday</h6></div>
                    <div class="col text-right">8°<i class="fa fa-cloud m-l-20"></i></div>
                </div>
                <div class="row m-t-15">
                    <div class="col">
                        <h6>Tuesday</h6></div>
                    <div class="col text-right">20°<i class="fa fa-sun-o m-l-20"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card user-card">
            <div class="card-block text-center">
                <div class="usre-image">
                    <img src="files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                </div>
                <h6 class="m-t-25 m-b-10">John Deo</h6>
                <p class="text-muted">Web Designer</p>
                <a href="#!" class="text-c-red d-block">websitename.com</a>
                <button class="btn btn-primary d-block">View Profile</button>
                <div class="row justify-content-center user-social-link m-b-25 p-t-10">
                    <div class="col-auto"><a href="#!" data-toggle="tooltip" data-placement="bottom" title="facebook"><i class="fa fa-facebook text-facebook f-20"></i></a></div>
                    <div class="col-auto"><a href="#!" data-toggle="tooltip" data-placement="bottom" title="twitter"><i class="fa fa-twitter text-twitter f-20"></i></a></div>
                    <div class="col-auto"><a href="#!" data-toggle="tooltip" data-placement="bottom" title="dribbble"><i class="fa fa-dribbble text-dribbble f-20"></i></a></div>
                </div>
            </div>
        </div>
    </div>
    <!--  whether order-visitor end -->

    <!--  project task start -->
    <div class="col-xl-6 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>To Do List</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block widget-last-task">
                <div class="to-do-list">
                    <div class="checkbox-fade fade-in-default">
                        <label class="check-task">
                            <input type="checkbox" value="">
                            <span class="cr">
                                                <i class="cr-icon fa fa-check txt-default"></i>
                                              </span>
                            <span>Check your Email</span>
                        </label>
                    </div>
                    <div class="f-right">
                        <a href="#!" class="delete_todolist"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
                <div class="to-do-list">
                    <div class="checkbox-fade fade-in-default">
                        <label class="check-task">
                            <input type="checkbox" value="">
                            <span class="cr">
                                                <i class="cr-icon fa fa-check txt-default"></i>
                                              </span>
                            <span>Make YouTube Video</span>
                        </label>
                    </div>
                    <div class="f-right">
                        <a href="#!" class="delete_todolist"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
                <div class="to-do-list">
                    <div class="checkbox-fade fade-in-default">
                        <label class="check-task">
                            <input type="checkbox" value="">
                            <span class="cr">
                                                <i class="cr-icon fa fa-check txt-default"></i>
                                              </span>
                            <span>Create Banner</span>
                        </label>
                    </div>
                    <div class="f-right">
                        <a href="#!" class="delete_todolist"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
                <div class="to-do-list">
                    <div class="checkbox-fade fade-in-default">
                        <label class="check-task">
                            <input type="checkbox" value="">
                            <span class="cr">
                                                <i class="cr-icon fa fa-check txt-default"></i>
                                              </span>
                            <span>Upload Project</span>
                        </label>
                    </div>
                    <div class="f-right">
                        <a href="#!" class="delete_todolist"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
                <div class="right-icon-control">
                    <form class="form-material">
                        <div class="form-group form-primary">
                            <input type="text" name="footer-email" class="form-control" required="">
                            <span class="form-bar"></span>
                            <label class="float-label">Add Task</label>
                        </div>
                    </form>
                    <div class="form-icon ">
                        <button class="btn btn-primary btn-icon  waves-effect waves-light">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-header">
                <h5>My Projects</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block widget-last-task">
                <p class="m-b-10">New Dashboard <span class="f-right">5 Mins ago</span></p>
                <ul class="list-unstyled m-b-25">
                    <li class="d-inline-block"><img src="files/assets/images/avatar-5.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                    <li class="d-inline-block"><img src="files/assets/images/avatar-1.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                    <li class="d-inline-block"><img src="files/assets/images/avatar-2.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                    <li class="d-inline-block"><img src="files/assets/images/avatar-3.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                </ul>
                <p class="m-b-10 ">Web Design <span class="f-right">8 Mins ago</span></p>
                <ul class="list-unstyled  m-b-25">
                    <li class="d-inline-block"><img src="files/assets/images/avatar-5.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                    <li class="d-inline-block"><img src="files/assets/images/avatar-2.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                    <li class="d-inline-block"><img src="files/assets/images/avatar-3.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                </ul>
                <p class="m-b-10">Android Design <span class="f-right">12 Mins ago</span></p>
                <ul class="list-unstyled">
                    <li class="d-inline-block"><img src="files/assets/images/avatar-4.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                    <li class="d-inline-block"><img src="files/assets/images/avatar-2.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                    <li class="d-inline-block"><img src="files/assets/images/avatar-3.jpg" alt="user-image" class="img-radius img-30 m-r-15" data-toggle="tooltip" data-placement="top" title="Tooltip on top"></li>
                </ul>
                <div class="right-icon-control m-t-15">
                    <form class="form-material">
                        <div class="form-group form-primary">
                            <input type="text" name="footer-email" class="form-control" required="">
                            <span class="form-bar"></span>
                            <label class="float-label">Add Project</label>
                        </div>
                    </form>
                    <div class="form-icon ">
                        <button class="btn btn-primary btn-icon  waves-effect waves-light">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card trafic-card">
            <div class="card-header">
                <h5>Traffic Sources</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <p class="m-b-10">Direct <span class="f-right"><i class="fa fa-caret-up m-r-10"></i>25%</span></p>
                <div class="progress blue">
                    <div class="progress-bar bg-c-blue" style="width:75%"></div>
                </div>
                <p class="m-b-10 m-t-30">Social <span class="f-right"><i class="fa fa-caret-down m-r-10"></i>58</span></p>
                <div class="progress green">
                    <div class="progress-bar bg-c-green" style="width:50%"></div>
                </div>
                <p class="m-b-10 m-t-30">Referral <span class="f-right"><i class="fa fa-caret-up m-r-10"></i>20%</span></p>
                <div class="progress red">
                    <div class="progress-bar bg-c-red" style="width:20%"></div>
                </div>
                <p class="m-b-10 m-t-30">bounce <span class="f-right"><i class="fa fa-caret-down m-r-10"></i>580</span></p>
                <div class="progress yellow">
                    <div class="progress-bar bg-c-yellow" style="width:40%"></div>
                </div>
                <p class="m-b-10 m-t-30">Internet <span class="f-right"><i class="fa fa-caret-up m-r-10"></i>70%</span></p>
                <div class="progress purple">
                    <div class="progress-bar bg-c-purple" style="width:90%"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  project task end -->

    <!--  acttivity and feed start -->
    <div class="col-xl-8 col-md-12">
        <div class="card latest-activity-card">
            <div class="card-header">
                <h5>Latest Activity</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="latest-update-box">
                    <div class="row p-t-20 p-b-30">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline">just now</p>
                            <i class="fa fa-fighter-jet bg-c-blue update-icon"></i>
                        </div>
                        <div class="col">
                            <h6>John Deo</h6>
                            <p class="text-muted m-b-15">The trip was an amazing and a life changing experience!!</p>
                            <img src="files/assets/images/mega-menu/01.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
                            <img src="files/assets/images/mega-menu/03.jpg" alt="" class="img-fluid img-100 m-r-15 m-b-10">
                        </div>
                    </div>
                    <div class="row p-b-30">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline">5 min ago</p>
                            <i class="fa fa-file-text bg-c-blue update-icon"></i>
                        </div>
                        <div class="col">
                            <h6>Administrator</h6>
                            <p class="text-muted m-b-0">Free courses for all our customers at A1 Conference Room - 9:00 am tomorrow!</p>
                        </div>
                    </div>
                    <div class="row p-b-30">
                        <div class="col-auto text-right update-meta">
                            <p class="text-muted m-b-0 d-inline">3 hours ago</p>
                            <i class="fa fa-map-marker bg-c-blue update-icon"></i>
                        </div>
                        <div class="col">
                            <h6>Jeny William</h6>
                            <p class="text-muted m-b-15">Happy Hour! Free drinks at <span class="text-c-blue"><a href="#!" class="text-c-blue">Cafe-Bar all</a>  </span>day long!</p>
                            <div id="markers-map" style="height:200px;width:100%"></div>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <a href="#!" class=" b-b-primary text-primary">View all Activity</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card feed-card">
            <div class="card-header">
                <h5>Feeds</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                        <i class="fa fa-bell bg-c-blue feed-icon"></i>
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                    </div>
                </div>
                <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                        <i class="fa fa-shopping-cart bg-c-red feed-icon"></i>
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">New order received <span class="text-muted f-right f-13">Just Now</span></h6>
                    </div>
                </div>
                <div class="row m-b-30">
                    <div class="col-auto p-r-0">
                        <i class="fa fa-file-text bg-c-green feed-icon"></i>
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">You have 3 pending tasks. <span class="text-muted f-right f-13">Just Now</span></h6>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                </div>
            </div>
        </div>
        <div class="card feed-card">
            <div class="card-header">
                <h5>Upcoming Deadlines</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-trash close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <div class="row m-b-25">
                    <div class="col-auto p-r-0">
                        <img src="files/assets/images/mega-menu/01.jpg" alt="" class="img-fluid img-50">
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">New able - Redesign</h6>
                        <p class="text-c-red m-b-0">2 Days Remaining</p>
                    </div>
                </div>
                <div class="row m-b-25">
                    <div class="col-auto p-r-0">
                        <img src="files/assets/images/mega-menu/02.jpg" alt="" class="img-fluid img-50">
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">New Admin Dashboard</h6>
                        <p class="text-c-red m-b-0">Proposal in 6 Days</p>
                    </div>
                </div>
                <div class="row m-b-25">
                    <div class="col-auto p-r-0">
                        <img src="files/assets/images/mega-menu/03.jpg" alt="" class="img-fluid img-50">
                    </div>
                    <div class="col">
                        <h6 class="m-b-5">Logo Design</h6>
                        <p class="text-c-green m-b-0">10 Days Remaining</p>
                    </div>
                </div>

                <div class="text-center">
                    <a href="#!" class="b-b-primary text-primary">View all Feeds</a>
                </div>
            </div>
        </div>
    </div>
    <!--  acttivity and feed end -->
</div>