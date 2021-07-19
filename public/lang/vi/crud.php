<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'Lưu và mục mới',
    'save_action_save_and_edit' => 'Lưu và chỉnh sửa mục này',
    'save_action_save_and_back' => 'Lưu và quay lại',
    'save_action_save_and_preview' => 'Lưu và xem trước',
    'save_action_changed_notification' => 'Hành vi mặc định sau khi lưu đã được thay đổi.',

    // Create form
    'add'                 => 'Thêm mới',
    'back_to_all'         => 'Quay về',
    'cancel'              => 'Hủy bỏ',
    'add_a_new'           => 'Thêm mới một ',

    // Edit form
    'edit'                 => 'Sửa',
    'save'                 => 'Lưu',

    // Translatable models
    'edit_translations' => 'Dịch',
    'language'          => 'Ngôn ngữ',

    // CRUD table view
    'all'                       => 'Tất cả ',
    'in_the_database'           => 'in the database',
    'list'                      => 'Danh sách',
    'reset'                     => 'Tải lại',
    'actions'                   => 'Hành động',
    'preview'                   => 'Xem trước',
    'delete'                    => 'Xóa',
    'admin'                     => 'Admin',
    'details_row'               => 'This is the details row. Modify as you please.',
    'details_row_loading_error' => 'There was an error loading the details. Please retry.',
    'clone'                     => 'Clone',
    'clone_success'             => '<strong>Entry cloned</strong><br>A new entry has been added, with the same information as this one.',
    'clone_failure'             => '<strong>Cloning failed</strong><br>The new entry could not be created. Please try again.',

    // Confirmation messages and bubbles
    'delete_confirm' => 'Bạn có chắc chắn muốn xóa mục này không?',
    'delete_confirmation_title' => 'Mục đã bị xóa',
    'delete_confirmation_message' => 'Mục đã được xóa thành công.',
    'delete_confirmation_not_title' => 'KHÔNG bị xóa',
    'delete_confirmation_not_message' => "Đã xảy ra lỗi. Mục của bạn có thể chưa bị xóa.",
    'delete_confirmation_not_deleted_title' => 'Chưa xóa',
    'delete_confirmation_not_deleted_message' => 'Không có gì xảy ra. Đồ của bạn an toàn. ',

    // Hành động số lượng lớn
    'Bul_no_entries_selected_title' => 'Không có mục nhập nào được chọn',
    'Bul_no_entries_selected_message' => 'Vui lòng chọn một hoặc nhiều mục để thực hiện hành động hàng loạt đối với chúng.',

    // Xóa hàng loạt
    'Bul_delete_are_you_sure' => 'Bạn có chắc chắn muốn xóa những: mục nhập số này không?',
    'Bul_delete_sucess_title' => "Đã xóa các mục nhập",
    'Bul_delete_sucess_message' => 'các mục đã bị xóa',
    'Bul_delete_error_title' => "Xóa không thành công",
    'Bul_delete_error_message' => 'Không thể xóa một hoặc nhiều mục',

    // Sao chép hàng loạt
    'Bul_clone_are_you_sure' => 'Bạn có chắc chắn muốn sao chép các mục: number này không?',
    'Bulk_clone_sucess_title' => "Đã sao chép các mục nhập",
    'Bulk_clone_sucess_message' => "các mục đã được sao chép.",
    'Bulk_clone_error_title' => "Sao chép không thành công",
    'Bul_clone_error_message' => "Không thể tạo một hoặc nhiều mục nhập. Vui lòng thử lại.",
    'Bul_clone_error_message' => "Không thể tạo một hoặc nhiều mục nhập. Vui lòng thử lại.",

    // Lỗi Ajax
    'ajax_error_title' => 'Lỗi',
    'ajax_error_text' => 'Lỗi khi tải trang. Vui lòng làm mới trang. ',

    // DataTables translation
    'emptyTable'     => 'No data available in table',
    'info'           => 'Showing _START_ to _END_ of _TOTAL_ entries',
    'infoEmpty'      => 'No entries',
    'infoFiltered'   => '(filtered from _MAX_ total entries)',
    'infoPostFix'    => '.',
    'thousands'      => ',',
    'lengthMenu'     => '_MENU_ entries per page',
    'loadingRecords' => 'Loading...',
    'processing'     => 'Processing...',
    'search'         => 'Tìm kiếm',
    'zeroRecords'    => 'No matching entries found',
    'paginate'       => [
        'first'    => 'First',
        'last'     => 'Last',
        'next'     => 'Next',
        'previous' => 'Previous',
    ],
    'aria' => [
        'sortAscending'  => ': activate to sort column ascending',
        'sortDescending' => ': activate to sort column descending',
    ],
    'export' => [
        'export'            => 'Export',
        'copy'              => 'Copy',
        'excel'             => 'Excel',
        'csv'               => 'CSV',
        'pdf'               => 'PDF',
        'print'             => 'Print',
        'column_visibility' => 'Column visibility',
    ],

    // global crud - errors
    'unauthorized_access' => 'Unauthorized access - you do not have the necessary permissions to see this page.',
    'please_fix'          => 'Please fix the following errors:',

    // global crud - success / error notification bubbles
    'insert_success' => 'Mục đã được thêm thành công.',
    'update_success' => 'Mục đã được sửa đổi thành công.',

    // CRUD reorder view
    'reorder'                      => 'Sắp xếp',
    'reorder_text'                 => 'Use drag&drop to reorder.',
    'reorder_success_title'        => 'Xong',
    'reorder_success_message'      => 'Đã lưu',
    'reorder_error_title'          => 'Lõi',
    'reorder_error_message'        => 'Your order has not been saved.',

    // CRUD yes/no
    'yes' => 'Có',
    'no'  => 'Không',

    // CRUD filters navbar view
    'filters'        => 'Bộ lọc',
    'toggle_filters' => 'Toggle filters',
    'remove_filters' => 'Remove filters',
    'apply' => 'Chấp nhận',

    //filters language strings
    'today' => 'Hôm nay',
    'yesterday' => 'Hôm qua',
    'last_7_days' => 'Last 7 Days',
    'last_30_days' => 'Last 30 Days',
    'this_month' => 'This Month',
    'last_month' => 'Last Month',
    'custom_range' => 'Custom Range',
    'weekLabel' => 'W',

    // Fields
    'browse_uploads'            => 'Browse uploads',
    'select_all'                => 'Chọn hết',
    'select_files'              => 'Chọn nhiều file',
    'select_file'               => 'Chọn file',
    'clear'                     => 'Xóa',
    'page_link'                 => 'Page link',
    'page_link_placeholder'     => 'http://example.com/your-desired-page',
    'internal_link'             => 'Internal link',
    'internal_link_placeholder' => 'Internal slug. Ex: \'admin/page\' (no quotes) for \':url\'',
    'external_link'             => 'External link',
    'choose_file'               => 'Choose file',
    'new_item'                  => 'New Item',
    'select_entry'              => 'Chọn',
    'select_entries'            => 'Chọn nhiều',

    //Table field
    'table_cant_add'    => 'Không thể thêm :entity',
    'table_max_reached' => 'Maximum number of :max reached',

    // File manager
    'file_manager' => 'Tệp',

    // InlineCreateOperation
    'related_entry_created_success' => 'Related entry has been created and selected.',
    'related_entry_created_error' => 'Could not create related entry.',

    // returned when no translations found in select inputs
    'empty_translations' => '(empty)',
];
