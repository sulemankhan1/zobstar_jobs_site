<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-trigger">
            <div class="dashboard-nav-trigger-btn">
                <i class="la la-bars"></i> Dashboard Navigation
            </div>
        </div>
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <?php $this->load->view('layout/admin_sidebar')?>
        </div>
    </div><!-- end dashboard-sidebar -->
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title">Manage Jobs</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="login">Home</a></li>
                            <li class="active__list-item"><a href="admin">Dashboard</a></li>
                            <li class="active__list-item"> <a href="admin/jobs">Manage Jobs</a></li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Manage Jobs</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content pb-0">
                            <div class="manage-job-wrap">
                                <div class="manage-job-header mt-3 mb-5">
                                    <div class="manage-job-count">
                                        <span class="font-weight-medium color-text-2 mr-1">12</span>
                                        <span class="font-weight-medium">job(s) Posted</span>
                                    </div>
                                    <div class="manage-job-count">
                                        <span class="font-weight-medium color-text-2 mr-1">8</span>
                                        <span class="font-weight-medium">Application(s)</span>
                                    </div>
                                    <div class="manage-job-count">
                                        <span class="font-weight-medium color-text-2 mr-1">6</span>
                                        <span class="font-weight-medium">Active Job(s)</span>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Application</th>
                                                <th>Create date</th>
                                                <th>Expire date</th>
                                                <th>Status</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach($records as $record) { ?>
                                            <tr>
                                                <td>
                                                    <div class="manage-candidate-wrap">
                                                        <h2 class="widget-title pb-1">
                                                          <a href="<?=site_url("view_job/".$record->id)?>" class="color-text-2"><?=@$record->Job_Title?></a>
                                                        </h2>
                                                        <p>
                                                            <span><i class="la la-clock-o font-size-16"></i> Last Update: <?=@date('d M Y', strtotime($record->updated_at))?> </span>
                                                        </p>
                                                    </div><!-- end manage-candidate-wrap -->
                                                </td>
                                                <td><?=@$record->No_Of_Applicant?> Application(s)</td>
                                                <td><?=@date('d M Y', strtotime($record->created_at))?></td>
                                                <td><?=@date('d M Y', strtotime($record->Application_Deadline))?></td>
                                                <td><span class="badge badge-success p-1"><?=@$record->Job_status?></span></td>
                                                <td class="text-center">
                                                    <div class="manage-candidate-wrap">
                                                        <div class="bread-action pt-0">
                                                            <ul class="info-list">
                                                                <li class="d-inline-block"><a href="#" ><i class="la la-eye" data-toggle="tooltip" data-placement="top" title="Active"></i></a></li>
                                                                <li class="d-inline-block"><a href="#"><i class="la la-edit" data-toggle="tooltip" data-placement="top" title="Edit"></i></a></li>
                                                                <li class="d-inline-block"><a href="#"><i class="la la-trash" data-toggle="tooltip" data-placement="top" title="Remove"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-navigation-wrap mt-4">
                        <div class="page-navigation mx-auto">
                            <a href="#" class="page-go page-prev">
                                <i class="la la-arrow-left"></i>
                            </a>
                            <ul class="page-navigation-nav">
                                <li><a href="#" class="page-go-link">1</a></li>
                                <li class="active"><a href="#" class="page-go-link">2</a></li>
                                <li><a href="#" class="page-go-link">3</a></li>
                                <li><a href="#" class="page-go-link">4</a></li>
                                <li><a href="#" class="page-go-link">5</a></li>
                            </ul>
                            <a href="#" class="page-go page-next">
                                <i class="la la-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- end page-navigation-wrap -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="copy-right margin-top-50px padding-top-20px padding-bottom-20px">
                        <p class="copy__desc">
                            Copyright &copy;2020 Zobstar Inc. Made with
                            <span class="la la-heart-o"></span> by <a href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                        </p>
                        <ul class="list-items">
                            <li><a href="#">Terms of Use,</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end copy-right -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div>
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->
