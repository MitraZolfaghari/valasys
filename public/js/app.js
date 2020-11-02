$(function () {
    $('.nav-sidebar li:not(.has-treeview) > a').on('click', function () {
        $(this).addClass('active');
        // $(this).siblings('.treeview.active').find('> a').trigger('click');
        $(this).siblings().removeClass('active').find('li').removeClass('active');
        /*
        var $parent = $(this).parent().addClass('active');
        $parent.siblings('.treeview.active').find('> a').trigger('click');
        $parent.siblings().removeClass('active').find('li').removeClass('active'); */
    });

    // $(window).on('load', function() {
    $('.nav-sidebar a').each(function () {
        if (window.location.href.indexOf(this.href) == 0) {
            $(this).addClass('active').closest('.has-treeview').addClass('menu-open')
                .children('a.nav-link').addClass('active');
            /*
            $(this).parent().addClass('active')
            		.closest('.treeview-menu').addClass('.menu-open')
            		.closest('.treeview').addClass('active'); */
        }
    });
    // });

    $('#dialog').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var title = button.data('whatever');

        $(this).find('.modal-title').text(title);
    });

    $('.delete').click(function (e) {
        e.preventDefault();

        var href = $(this).attr('href');
        var $form = $('#delete-form').attr('action', href);

        $('#dialog').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var title = button.data('whatever');
            var message = 'آیا از حذف این آیتم مطمئن هستید؟';
            var modal = $(this);

            modal.find('.modal-content').removeClass().addClass('modal-content bg-danger');
            modal.find('.modal-title').text(title);
            modal.find('.modal-body p').html(message);
        }).on('click', '#btn-confirmed', function () {
            $form.submit();
        });
    });

    $('.reset').click(function (e) {
        e.preventDefault();

        var href = $(this).attr('href');

        $('#dialog').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var title = button.data('whatever');
            var modal = $(this);

            modal.find('.modal-content').removeClass().addClass('modal-content bg-secondary');
            modal.find('.modal-title').text(title);
            modal.find('.modal-body').load(href);
        }).on('click', '#btn-confirmed', function () {
            $('#reset-form').submit();
        });
    });

    $('.import').click(function (e) {
        e.preventDefault();

        var href = $(this).attr('href');

        $('#dialog').on('show.bs.modal', function (e) {
            var button = $(e.relatedTarget);
            var title = button.data('whatever');
            var modal = $(this);

            modal.find('.modal-content').removeClass().addClass('modal-content bg-info');
            modal.find('.modal-title').text(title);
            modal.find('.modal-body').load(href, {
                action: href,
                accept: '.xlx,.xlsx,.csv'
            });
        }).on('click', '#btn-confirmed', function () {
            $('#import-form').submit();
        });
    });

    $('.datepicker').daterangepicker({
        autoApply: true,
        singleDatePicker: true,
        locale: {
            // format: "YYYY-MM-DD",
            format: 'jYYYY/jMM/jDD',
            separator: ' - ',
            applyLabel: 'انتخاب',
            cancelLabel: 'انصراف',
            fromLabel: 'از',
            toLabel: 'تا',
            daysOfWeek: [
                'یک',
                'دو',
                'سه',
                'چهار',
                'پنج',
                'جمعه',
                'شنبه',
            ],
            monthNames: [
                'فروردین',
                'اردیبهشت',
                'خرداد',
                'تیر',
                'مرداد',
                'شهریور',
                'مهر',
                'آبان',
                'آذر',
                'دی',
                'بهمن',
                'اسفند',
            ],
            firstDay: 6
        }
	});

    $('.zabbix-table').DataTable({
        "dom": "<'row'<'col-sm-12 col-md-6'f><'col-sm-12 col-md-6'l>>" +
            "<'row'<'col-sm-12'tr>>" +
            "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
        'paging': true,
        'lengthChange': true,
        'searching': true,
        'ordering': true,
        'info': true,
        'autoWidth': true,
        'language': {
           // 'url': "/plugins/datatables/lang/Persian.json"
            "sEmptyTable":     "هیچ داده‌ای در جدول وجود ندارد",
            "sInfo":           "نمایش _START_ تا _END_ از _TOTAL_ ردیف",
            "sInfoEmpty":      "نمایش 0 تا 0 از 0 ردیف",
            "sInfoFiltered":   "(فیلتر شده از _MAX_ ردیف)",
            "sInfoPostFix":    "",
            "sInfoThousands":  ",",
            "sLengthMenu":     "نمایش _MENU_ ردیف",
            "sLoadingRecords": "در حال بارگزاری...",
            "sProcessing":     "در حال پردازش...",
            "sSearch":         "جستجو:",
            "sZeroRecords":    "رکوردی با این مشخصات پیدا نشد",
            "oPaginate": {
                "sFirst":    "برگه‌ی نخست",
                "sLast":     "برگه‌ی آخر",
                "sNext":     "بعدی",
                "sPrevious": "قبلی"
            },
            "oAria": {
                "sSortAscending":  ": فعال سازی نمایش به صورت صعودی",
                "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
            }
        }
    });

    $('.select2').select2({
        // theme: 'bootstrap4'
    });
});
