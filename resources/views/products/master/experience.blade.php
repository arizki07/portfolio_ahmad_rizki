@extends('layouts.app')
@section('content')
    @include('components.alerts')
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
                            {{ $judul }}
                        </h2>
                        <div class="page-pretitle">
                            <ol class="breadcrumb" aria-label="breadcrumbs">
                                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                        Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="#"><i
                                            class="fa-regular fa-paste"></i> {{ $judul }}</a></li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a href="#" class="btn btn-primary d-none d-sm-inline-block mr-2"
                                data-bs-toggle="modal" data-bs-target="#modal-add-experience" data-bs-backdrop="static"
                                data-bs-keyboard="false">
                                <svg xmlns="http://www.w3.org/2000/svg" style="margin-right: 10px"
                                    class="icon icon-tabler icon-tabler-square-half" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 4v16" />
                                    <path
                                        d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                                    <path d="M12 13l7.5 -7.5" />
                                    <path d="M12 18l8 -8" />
                                    <path d="M15 20l5 -5" />
                                    <path d="M12 8l4 -4" />
                                </svg>
                                Tambah Experience
                            </a>
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

@section('modal')
    <style>
        /*-- CSS MODAL --*/
        <style>.overlay {
            position: fixed;
            top: 0;
            z-index: 100;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .cv-spinner {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader {
            width: 48px;
            height: 48px;
            display: block;
            margin: 15px auto;
            position: relative;
            color: #ff0000c3;
            box-sizing: border-box;
            animation: rotation 1s linear infinite;
        }

        .loader::after,
        .loader::before {
            content: '';
            box-sizing: border-box;
            position: absolute;
            width: 24px;
            height: 24px;
            top: 50%;
            left: 50%;
            transform: scale(0.5) translate(0, 0);
            background-color: #ff0000c3;
            border-radius: 50%;
            animation: animloader 1s infinite ease-in-out;
        }

        .loader::before {
            background-color: #ffffffba;
            transform: scale(0.5) translate(-48px, -48px);
        }

        @keyframes rotation {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animloader {
            50% {
                transform: scale(1) translate(-50%, -50%);
            }
        }
    </style>
    {{-- modal add --}}
    <div class="modal modal-blur fade" id="modal-add-experience" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add {{ $judul }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- <form action="{{ route('experience.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Periode (Contoh: 2022 - Sekarang atau 2010 - 2014)</label>
                            <input type="text" class="form-control" name="periode"
                                placeholder="Masukkan periode, contoh: 2022 - Sekarang">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jobs</label>
                            <input type="text" class="form-control" name="jobs" placeholder="Input Tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-control" name="company" placeholder="Input Tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan <span
                                    class="form-label-description">56/100</span></label>
                            <textarea class="form-control" name="keterangan" rows="6" placeholder="Isi keterangan"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="logo" class="form-control mb-3" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- end modal add --}}
    {{-- modal edit --}}
    <div class="modal modal-blur fade" id="modal-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add {{ $judul }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{ date('Y-m-d') }}"
                                placeholder="Input Tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jobs</label>
                            <input type="text" class="form-control" name="jobs" placeholder="Input Tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-control" name="company" placeholder="Input Tanggal">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Keterangan <span
                                    class="form-label-description">56/100</span></label>
                            <textarea class="form-control" name="keterangan" rows="6" placeholder="Isi keterangan"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Updated</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end modal edit --}}
@endsection
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
            "columns": [{
                    data: 'action',
                    name: 'action',
                    className: 'cuspad0 clickable cursor-pointer',
                    orderable: false,
                    searchable: false,
                },
                {
                    title: 'TANGGAL',
                    data: 'periode',
                    name: 'periode',
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
                    className: "cuspad0 clickable text-center cursor-pointer"
                },
            ],

        });

        /*-----------------------------------------EDIT EXPERIENCE-----------------------------------------------*/
        $(document).ready(function() {

            function showOverlay() {
                $('body').append(
                    '<div class="overlay"><div class="cv-spinner"><span class="loader"></span></div></div>'
                );
            }

            function hideOverlay() {
                $('.overlay').remove();
            }

            // Tombol Edit
            $(document).on('click', '.edit-btn', function() {
                var id = $(this).data('id');

                showOverlay();
                $.ajax({
                    url: '/experience/edit/' + id,
                    type: 'GET',
                    success: function(data) {
                        // Isi form dengan data yang diambil dari server
                        $('#modal-edit input[name="periode"]').val(data.periode);
                        $('#modal-edit input[name="jobs"]').val(data.jobs);
                        $('#modal-edit input[name="company"]').val(data.company);
                        $('#modal-edit textarea[name="keterangan"]').val(data
                            .keterangan);

                        // Set form action ke URL update
                        $('#editForm').attr('action', '/experience/update/' + id);

                        // Tampilkan modal edit
                        var modal = new bootstrap.Modal(document.getElementById(
                            'modal-edit'));
                        modal.show();

                        hideOverlay
                            (); // Sembunyikan overlay setelah data berhasil diambil
                    },
                    error: function() {
                        hideOverlay
                            (); // Sembunyikan overlay jika gagal mengambil data
                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to fetch data',
                            icon: 'error',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    }
                });
            });

            // Form Submit untuk update data
            $('#editForm').on('submit', function(e) {
                e.preventDefault();

                var formAction = $(this).attr('action'); // URL action dari form
                var formData = $(this).serialize(); // Data dari form

                showOverlay(); // Tampilkan overlay saat proses update

                $.ajax({
                    url: formAction,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        hideOverlay(); // Sembunyikan overlay setelah sukses

                        Swal.fire({
                            icon: 'success',
                            title: 'Data successfully updated',
                            position: 'top-end',
                            toast: true,
                            showConfirmButton: false,
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter',
                                    Swal.stopTimer);
                                toast.addEventListener('mouseleave',
                                    Swal.resumeTimer);
                            }
                        }).then(() => {
                            location
                                .reload(); // Reload halaman setelah notifikasi
                        });

                        $('#modal-edit').modal(
                            'hide'); // Tutup modal setelah sukses
                        $('#datatable-experience').DataTable().ajax
                            .reload(); // Reload tabel DataTables
                    },
                    error: function(xhr, status, error) {
                        hideOverlay(); // Sembunyikan overlay jika terjadi error

                        Swal.fire({
                            title: 'Error!',
                            text: 'Failed to update data: ' + xhr
                                .responseText,
                            icon: 'error',
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true
                        });
                    }
                });
            });

        });

        /*-----------------------------------------DESTROY EXPERIENCE-----------------------------------------------*/
        $('.datatable-experience').on('click', '.remove', function() {
            var jobs = $(this).data('id');
            var nama = $(this).data('nama');
            var desc = $(this).data('desc');
            var token = $("meta[name='csrf-token']").attr("content");
            let r = (Math.random() + 1).toString(36).substring(2);

            swal.fire({
                title: 'Hapus Data Permintaan',
                text: 'Apakah anda yakin ingin menghapus ' + jobs + ', Ket : ' + nama +
                    " " + desc,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: '<i class="fa-regular fa-trash-can"></i> Hapus',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    (async () => {
                        const {
                            value: password
                        } = await Swal.fire({
                            title: "Ketik tulisan dibawah untuk menghapus " +
                                jobs,
                            html: '<div class="unselectable">' + r +
                                '</div>',
                            input: "text",
                            inputPlaceholder: "Enter your password to Delete " +
                                nama,
                            showCancelButton: true,
                            cancelButtonColor: '#3085d6',
                            cancelButtonText: 'Batal',
                            confirmButtonText: 'Ok',
                            inputAttributes: {
                                autocapitalize: "off",
                                autocorrect: "off"
                            },
                        });
                        if (password == r) {
                            $.ajax({
                                type: "DELETE",
                                url: "{{ route('getExperience.store') }}" +
                                    '/' + jobs,
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                },
                                beforeSend: function() {
                                    Swal.fire({
                                        title: 'Mohon Menunggu',
                                        html: '<center><lottie-player src="https://lottie.host/54b33864-47d1-4f30-b38c-bc2b9bdc3892/1xkjwmUkku.json"  background="transparent"  speed="1"  style="width: 400px; height: 400px;"  loop autoplay></lottie-player></center><br><h1 class="h4">Sedang menghapus data, Proses mungkin membutuhkan beberapa menit. <br><br><b class="text-danger">(Jangan menutup jendela ini, bisa mengakibatkan error)</b></h1>',
                                        timerProgressBar: true,
                                        showConfirmButton: false,
                                        allowOutsideClick: false,
                                        allowEscapeKey: false,
                                    })
                                },
                                success: function(data) {
                                    tableExperience.ajax.reload();
                                    const Toast = Swal.mixin({
                                        toast: true,
                                        position: "top-end",
                                        showConfirmButton: false,
                                        timer: 3000,
                                        timerProgressBar: true,
                                        didOpen: (toast) => {
                                            toast.onmouseenter =
                                                Swal.stopTimer;
                                            toast.onmouseleave =
                                                Swal
                                                .resumeTimer;
                                        }
                                    });
                                    Toast.fire({
                                        icon: "success",
                                        title: "Data Permintaan : " +
                                            nama + " (" + jobs +
                                            ") Terhapus"
                                    });
                                },
                                error: function(data) {
                                    tableExperience.ajax.reload();
                                    console.log('Error:', data
                                        .responseText);
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Gagal!',
                                        text: 'Error: ' + data
                                            .responseText,
                                        showConfirmButton: true,
                                    });
                                }
                            });
                        } else {
                            tableExperience.ajax.reload();
                            Swal.fire({
                                icon: "error",
                                title: "Gagal",
                                text: "Teks yang diketik tidak sama",
                            });
                        }
                    })()
                }
            })
        });
    });
</script>
@endsection
