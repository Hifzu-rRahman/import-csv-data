<style>
    .menu-item-active-smp {
        color: #38424C;
        text-decoration: none;
        background: rgba(240, 90, 100, 0.2);
        border-radius: 7px;
        font-weight: 400;
        font-size: 20px;
        line-height: 30px;
        display: flex;
        align-items: center;
    }

    .sidebar-header {
        border-bottom: 1px solid white;
    }
</style>
<div class="mt-4 sidebar-wrapper" style="background: #FFFFFF !important; color:#38424C;" data-simplebar="true">
    <div class="sidebar-header" style="background: #FFFFFF !important; color:#38424C; padding-top:20px;">
        <!-- <div><img src="<?= url('public/resources/images/study-logo.png')  ?>" class="logo-icon" alt="logo icon"></div> -->
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i></div>
    </div>

    <?php
    // $uri = service('uri'); 
    ?>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <a href="<?= url('dashboard') ?>" style="border-radius: 7px; color:#38424C;" class="<?= ((in_array(request()->segment(2), array('dashboard')))) ? 'menu-item-active-smp' : '' ?>">
            <div class="parent-icon"><i class="bx bx bx-home-circle"></i>
            </div>
            <div class="menu-title"><?= __('message.Dashboard') ?></div>
        </a>
        <a href="<?= url('manage-import-data') ?>" style="border-radius: 7px; color:#38424C;" class="<?= ((in_array(request()->segment(2), array('manage-categories', 'add-category', 'edit-category')))) ? 'menu-item-active-smp' : '' ?>">
            <div class="parent-icon"><i class="bx bx-layer"></i>
            </div>
            <div class="menu-title"><?= __('message.Manage Import Data') ?></div>
        </a>
        <a href="<?= url('manage-report-1') ?>" style="border-radius: 7px; color:#38424C;" class="<?= ((in_array(request()->segment(2), array('manage-categories', 'add-category', 'edit-category')))) ? 'menu-item-active-smp' : '' ?>">
            <div class="parent-icon"><i class="bx bx-layer"></i>
            </div>
            <div class="menu-title"><?= __('message.Manage Report 1') ?></div>
        </a>
        <a href="<?= url('manage-report-2') ?>" style="border-radius: 7px; color:#38424C;" class="<?= ((in_array(request()->segment(2), array('manage-categories', 'add-category', 'edit-category')))) ? 'menu-item-active-smp' : '' ?>">
            <div class="parent-icon"><i class="bx bx-layer"></i>
            </div>
            <div class="menu-title"><?= __('message.Manage Report 2') ?></div>
        </a>
        <br>
    </ul>
    <!--end navigation-->
</div>