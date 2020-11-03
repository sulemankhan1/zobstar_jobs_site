<div class="side-menu-wrap">
    <ul class="side-menu-ul">
        <li class='<?=@($active_menu == "dashboard") ? "page-active" : ""?>'><a href="<?=site_url('admin')?>"><i class="la la-dashboard icon-element"></i> Dashboard</a></li>
        <li><a href="<?=site_url('admin/messages')?>"><i class="la la-envelope icon-element"></i> Messages <span class="badge badge-info radius-rounded p-1">3</span></a></li>
        <li class='<?=@($active_menu == "jobs") ? "page-active" : ""?>'>
            <a href="#"><i class="la la-briefcase icon-element"></i> Jobs <span class="la la-caret-down btn-toggle"></span></a>
            <ul class="dropdown-menu-item">
                <li><a href="<?=site_url('admin/jobs')?>">Manage Jobs</a></li>
                <li><a href="<?=site_url('admin/job_candidates')?>">Manage Candidates</a></li>
                <li><a href="<?=site_url('admin/post-job')?>">Post New Job</a></li>
            </ul>
        </li>
        <li class='<?=@($active_menu == "transactions") ? "page-active" : ""?>'><a href="employer-transactions.html"><i class="la la-line-chart icon-element"></i>Transactions</a></li>
        <li class='<?=@($active_menu == "settings") ? "page-active" : ""?>'>
            <a href="<?=site_url('admin/settings')?>"><i class="la la-gear icon-element"></i> Settings <span class="la la-caret-down btn-toggle"></span></a>
            <ul class="dropdown-menu-item">
                <li><a href="<?=site_url('user/edit_profile')?>">Edit Profile</a></li>
                <li><a href="<?=site_url('user/change_password')?>">Change Password</a></li>
            </ul>
        </li>

        <li><div class="section-block margin-top-30px mb-3"></div></li>
        <li class='<?=@($active_menu == "view_profile") ? "page-active" : ""?>'><a href="<?= site_url("employer-details")?>"><i class="la la-user icon-element"></i> View Profile</a></li>
        <li><a href="<?=site_url('users/logout')?>"><i class="la la-power-off icon-element"></i> Logout</a></li>
    </ul>
</div><!-- end side-menu-wrap -->
