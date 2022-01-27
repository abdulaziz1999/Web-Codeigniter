<body class="landing-page">
    <?php $this->load->view('layouts/nav');?>
    <div class="wrapper">
        <div class="section section-hero section-shaped">
            <div class="shape shape-style-3 shape-default">
                <span class="span-150"></span>
                <span class="span-50"></span>
                <span class="span-50"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
            </div>
            <div class="page-header">
                <div class="container shape-container d-flex align-items-center py-lg">
                    <div class="col px-0">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-6 text-center">
                                <h1 class="text-white display-1">People stories</h1>
                                <h2 class="display-4 font-weight-normal text-white">The time is right now!</h2>
                                <div class="btn-wrapper mt-4">
                                    <a href="https://www.creative-tim.com/product/argon-design-system"
                                        class="btn btn-warning btn-icon mt-3 mb-sm-0">
                                        <span class="btn-inner--icon"><i class="ni ni-button-play"></i></span>
                                        <span class="btn-inner--text">Play more</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="section features-6">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name</th>
                                    <th>Job Position</th>
                                    <th>Since</th>
                                    <th class="text-right">Salary</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; foreach($name_student as $row){?>
                                <tr>
                                    <td class="text-center"><?= $no++?></td>
                                    <td><?= $row['nama']?></td>
                                    <td><?= $row['job']?></td>
                                    <td><?= $row['year']?></td>
                                    <td class="text-right">&euro; 99,225</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm "
                                            data-original-title="" title="">
                                            <i class="ni ni-circle-08 pt-1"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm "
                                            data-original-title="" title="">
                                            <i class="ni ni-settings-gear-65 pt-1"></i>
                                        </button>
                                        <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm "
                                            data-original-title="" title="">
                                            <i class="ni ni-fat-remove pt-1"></i>
                                        </button>
                                    </td>
                                </tr>
                                <?php  }?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Job Position</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" placeholder="Nama" class="form-control form-control-alternative" />
                                        </div>
                                    </td>
                                    <td>
                                        <select class="form-control form-control-alternative" id="salary" onchange="onsalary()">
                                            <option disabled selected>Pilih Job</option>
                                            <option value="programmer">Programmer</option>
                                            <option value="analis">Analis</option>
                                            <option value="designer">Designer</option>
                                        </select>
                                    </td>
                                    <td>
                                        <div class="form-group" >
                                            <input type="text" placeholder="Salary" id="returnSalary" class="form-control form-control-alternative" />
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="section features-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">Insight</span>
                        <h3 class="display-3">Full-Funnel Social Analytics</h3>
                        <p class="lead">The time is now for it to be okay to be great. For being a bright color. For
                            standing out.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                                <i class="ni ni-settings-gear-65"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-primary">Social Conversations</h6>
                            <p class="description opacity-8">We get insulted by others, lose trust for those others. We
                                get back stabbed by friends. It becomes harder for us to give others a hand.</p>
                            <a href="javascript:;" class="text-primary">More about us
                                <i class="ni ni-bold-right text-primary"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                                <i class="ni ni-atom"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-success">Analyze Performance</h6>
                            <p class="description opacity-8">Don't get your heart broken by people we love, even that we
                                give them all we have. Then we lose family over time. As we live, our hearts turn
                                colder.</p>
                            <a href="javascript:;" class="text-primary">Learn about our products
                                <i class="ni ni-bold-right text-primary"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                                <i class="ni ni-world"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-warning">Measure Conversions</h6>
                            <p class="description opacity-8">What else could rust the heart more over time? Blackgold.
                                The time is now for it to be okay to be great. or being a bright color. For standing
                                out.</p>
                            <a href="javascript:;" class="text-primary">Check our documentation
                                <i class="ni ni-bold-right text-primary"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br /><br />
        <footer class="footer">
            <div class="container">
                <div class="row row-grid align-items-center mb-5">
                    <!-- <div class="col-lg-6"> -->
                    <!-- <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4> -->
                    <!-- </div> -->
                    <div class="col-lg-12 text-lg-center btn-wrapper">
                        <marquee behavior="" direction="">
                            <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
                            <button target="_blank" href="https://twitter.com/creativetim" rel="nofollow"
                                class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip"
                                data-original-title="Follow us">
                                <span class="btn-inner--icon"><i class="fa fa-twitter"></i></span>
                            </button>
                            <button target="_blank" href="https://www.facebook.com/CreativeTim/" rel="nofollow"
                                class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip"
                                data-original-title="Like us">
                                <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                            </button>
                            <button target="_blank" href="https://dribbble.com/creativetim" rel="nofollow"
                                class="btn btn-icon-only btn-dribbble rounded-circle" data-toggle="tooltip"
                                data-original-title="Follow us">
                                <span class="btn-inner--icon"><i class="fa fa-dribbble"></i></span>
                            </button>
                            <button target="_blank" href="https://github.com/creativetimofficial" rel="nofollow"
                                class="btn btn-icon-only btn-github rounded-circle" data-toggle="tooltip"
                                data-original-title="Star on Github">
                                <span class="btn-inner--icon"><i class="fa fa-github"></i></span>
                            </button>
                        </marquee>
                    </div>
                </div>
                <hr>
                <div class="row align-items-center justify-content-md-between">
                    <div class="col-md-6">
                        <div class="copyright">
                            &copy; 2020 <a href="" target="_blank">Creative Tim</a>.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="nav nav-footer justify-content-end">
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>