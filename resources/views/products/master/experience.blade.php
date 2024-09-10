@extends('layouts.app')
@section('content')
@section('css')
    <style>
        td.cuspad0 {
            padding-top: 1px;
            padding-bottom: 1px;
            padding-right: 13px;
            padding-left: 13px;
        }

        td.cuspad1 {
            text-transform: uppercase;
        }

        .transparent-card {
            background-color: rgba(255, 255, 255, 0);
            /* Transparansi 100% */
            border: 1px solid rgba(0, 0, 0, 0);
            /* Border transparan 100% */
            box-shadow: none;
            /* Menghilangkan shadow */
            opacity: 20;
            /* Membuat card sepenuhnya transparan */
        }

        background-color: rgba(255, 255, 255, 0);
        /* Transparansi 100% pada latar belakang */
        border: 1px solid rgba(0, 0, 0, 0.1);
        /* Border hitam dengan 10% transparansi */
        box-shadow: none;
        /* Menghilangkan shadow */
    </style>
@endsection
<div class="page">
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <h2 class="page-title">
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px"
                                class="icon icon-tabler icon-tabler-mail" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                <path d="M3 7l9 6l9 -6" />
                            </svg>
                            Proses Email
                        </h2>
                        <div class="page-pretitle">
                            <ol class="breadcrumb" aria-label="breadcrumbs">
                                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                        Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="https://pintex.co.id/apps/HR/Recruitment"><i
                                            class="fa-solid fa-basket-shopping"></i> Pengadaan</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#"><i
                                            class="fa-regular fa-paste"></i> Proses Email</a></li>
                            </ol>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card card-xl border-success shadow rounded">
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-success">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body" style="overflow-x: auto;">
                                    <div style="overflow-x: auto;">
                                        <table style="width:100%; height: 100%;font-size:13px;"
                                            class="table table-bordered table-vcenter card-table table-hover text-nowrap datatable datatable-experience">
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function newexportaction(e, dt, button, config) {
        var self = this;
        var oldStart = dt.settings()[0]._iDisplayStart;

        dt.one('preXhr', function(e, s, data) {
            data.start = 0;
            data.length = 2147483647;

            dt.one('preDraw', function(e, settings) {
                if (button[0].className.indexOf('buttons-copy') >= 0) {
                    $.fn.dataTable.ext.buttons.copyHtml5.action.call(self, e, dt, button, config);
                } else if (button[0].className.indexOf('buttons-excel') >= 0) {
                    $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
                        $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
                        $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
                } else if (button[0].className.indexOf('buttons-pdf') >= 0) {
                    $.fn.dataTable.ext.buttons.pdfHtml5.available(dt, config) ?
                        $.fn.dataTable.ext.buttons.pdfHtml5.action.call(self, e, dt, button, config) :
                        $.fn.dataTable.ext.buttons.pdfFlash.action.call(self, e, dt, button, config);
                }
                settings._iDisplayStart = oldStart;
                data.start = oldStart;
            });
        });

        dt.ajax.reload();
    }

    $(document).ready(function() {
        var tableExperience = $('.datatable-experience').DataTable({
            "processing": true,
            "serverSide": false,
            "scrollX": false,
            "scrollCollapse": false,
            "pagingType": 'full_numbers',
            "dom": "<'card-header h3' B>" +
                "<'card-body border-bottom py-3' <'row'<'col-sm-6'l><'col-sm-6'f>> >" +
                "<'table-responsive' <'col-sm-12'tr> >" +
                "<'card-footer' <'row'<'col-sm-5'i><'col-sm-7'p> >>",
            "lengthMenu": [
                [10, 10, 25, 50, -1],
                ['Default', '10', '25', '50', 'Semua']
            ],
            "buttons": [{
                    extend: 'collection',
                    text: 'Selection',
                    buttons: ['selectAll', 'selectNone']
                }, {
                    extend: 'copyHtml5',
                    className: 'btn btn-teal',
                    text: '<i class="fa fa-copy text-white"></i> Copy',
                    action: newexportaction,
                },
                {
                    extend: 'excelHtml5',
                    autoFilter: true,
                    className: 'btn btn-success',
                    text: '<i class="fa fa-file-excel text-white"></i> Excel',
                    action: newexportaction,
                },
                {
                    extend: 'pdfHtml5',
                    className: 'btn btn-danger',
                    text: '<i class="fa fa-file-pdf text-white"></i> Pdf',
                },
                {
                    "className": 'btn btn-success',
                    "text": '<i class="fa-solid fa-file-circle-check"></i> Proses Email',
                    "action": function(e, node, config) {
                        $('#modalChecklistEmail').modal('show')
                    }
                }
            ],
            "language": {
                "lengthMenu": "Menampilkan _MENU_",
                "zeroRecords": "Data Tidak Ditemukan",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ total data",
                "infoEmpty": "Data Tidak Ditemukan",
                "infoFiltered": "(Difilter dari _MAX_ total records)",
                "processing": '<div class="container container-slim py-4"><div class="text-center"><div class="mb-3"></div><div class="text-secondary mb-3">Loading Data...</div><div class="progress progress-sm"><div class="progress-bar progress-bar-indeterminate"></div></div></div>',
                "search": '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path><path d="M21 21l-6 -6"></path></svg>',
                "paginate": {
                    "first": '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left-pipe" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M7 6v12"></path><path d="M18 6l-6 6l6 6"></svg>',
                    "last": '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-right-pipe" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 6l6 6l-6 6"></path><path d="M17 5v13"></path></svg>',
                    "next": '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24h24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>',
                    "previous": '<svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24h24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>',
                },
                "select": {
                    rows: {
                        _: "%d item dipilih ",
                        0: "Pilih item dan tekan tombol Proses data untuk memproses Email ",
                    }
                },
            },
            "ajax": {
                "url": "{{ route('getExperience.index') }}",
                "data": function(data) {
                    data._token = "{{ csrf_token() }}";

                }
            },
            "initComplete": function(settings, json) {
                $('html').removeClass('cursor-wait');
            },
            columnDefs: [{
                'targets': 0,
                "orderable": false,
                'className': 'select-checkbox',
                'checkboxes': {
                    'selectRow': true
                },
            }],
            select: {
                'style': 'multi',
                // "selector": 'td:not(:nth-child(2))',
            },
            "columns": [{
                    data: 'select_orders',
                    name: 'select_orders',
                    className: 'select-checkbox',
                    orderable: false,
                    searchable: false,
                    extend: 'selectAll',
                    selectorModifier: {
                        search: 'applied'
                    }
                },
                {
                    title: 'TANGGAL',
                    data: 'tanggal',
                    name: 'tanggal',
                    className: "cuspad0 cuspad1 text-center clickable cursor-pointer"
                },
                {
                    title: 'JOBS',
                    data: 'jobs',
                    name: 'jobs',
                    className: "cuspad0 cuspad1 text-center clickable cursor-pointer"
                },
                {
                    title: 'COMPANY',
                    data: 'company',
                    name: 'company',
                    className: "cuspad0 cuspad1 text-center cursor-pointer"
                },
                {
                    title: 'KETERANGAN',
                    data: 'keterangan',
                    name: 'keterangan',
                    className: "cuspad0 clickable cursor-pointer"
                },
                {
                    title: 'OPSI',
                    data: 'action',
                    name: 'action',
                    className: "cuspad0 cuspad1 text-center cursor-pointer"
                },
            ],

        });
    });
</script>
@endsection
