<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<style>
    .nav-icon{color: white!important;}
    .nav-icon:hover{color: black!important;}

    .nav-link.active{background: black!important;}
    ul .sidebar.sidebar-pills .nav-link.active, .sidebar.sidebar-pills .nav-link:hover {
        color: black!important;
        background-color: rgba(0,0,0,.02);}
    .sidebar.sidebar-pills .nav-link.active, .sidebar.sidebar-pills .nav-link {
        color: white!important;
        background-color: rgba(0,0,0,.02);}
</style>
<li class="nav-item text-white"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('trade') }}'><i class='nav-icon la la-house-damage'></i> Nhà phân phối</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('category') }}'><i class='nav-icon la la-book'></i> Danh mục</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('products') }}'><i class='nav-icon la la-box'></i> Sản phẩm</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('elfinder') }}"><i class="nav-icon la la-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>

<li class='nav-item'><a class='nav-link' href='{{ backpack_url('tag') }}'><i class='nav-icon la la-tags'></i> Nhãn</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('faq') }}'><i class='nav-icon la la-question'></i> Câu hỏi thường gặp</a></li>
