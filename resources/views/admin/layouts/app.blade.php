<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Systems Manager | @yield('title', 'Dashboard')</title>
    <link href="/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/v2/css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('admin/v2/css/flag.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('admin/v2/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/v2/css/custom.css') }}" rel="stylesheet">
    @yield('css')
    <link href="{{ asset('admin/v2/css/coreui-chartjs.css') }}" rel="stylesheet">
    <style>
        .tox .tox-toolbar__overflow {
            right: 100px !important;
            left: auto!important;
            max-width: 739px!important;
            width: 900px!important;
        }
        small.text-danger {
            display: block;
            margin-bottom: 5px;
        }
        .card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .p10 {
            padding: 10px;
        }
    </style>
</head>
<body class="c-app">
    <div id="loadingIcon" style="position:fixed;width:100%;height:100%;z-index:99999;background: rgb(244, 245, 246);display:flex;align-items:center;justify-content:center;">
        <img src="{{ asset('admin/v2/icons/spinnervlll.gif') }}" width="150px">
    </div>
    @include('admin.shared.nav-builder')
    <div class="c-wrapper c-fixed-components">
        @include('admin.shared.header')
        <div class="c-body">
            <main class="c-main">
                <div class="container">
                    @if(Session::has('success'))
                    <div class="msg-alert alert alert-success" role="alert">{{ Session::get('success') }}</div>
                    @endif
                    @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
                    @endif
                </div>
                @yield('content')
            </main>
            </div>
        </div>
    </div>
    <div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" style="display:none;" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <i class="c-icon icon--modal cil-warning text-danger"></i>
                    <h5 class="title-confirm">Bạn có chắc chắn muốn xoá?</h5>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                    <button class="btn btn-danger" onclick="$('#html-form-delete').find('form').submit()" type="button">Có</button>
                    <div id="html-form-delete"></div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.shared.files-modal')
    <script src="{{ asset('admin/v2/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/v2/js/coreui-utils.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/cd89cfqodamjuxinfsl9k4zjkzfmnte4v0gqwy9g39s3ue50/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('admin/v2/js/filemanage.js') }}"></script>
    @yield('javascript')
    <script>
        tinymce.init({
            selector: '.tinymce_content',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime lists wordcount textpattern noneditable charmap quickbars emoticons',
            toolbar: 'code | undo redo | dialogimage | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile media link anchor codesample | ltr rtl',
            font_formats: "Gilroy; Gilroy Regular; Gilroy Light; SVN Gilroy Medium=VN Gilroy Medium; Gilroy Medium; Andale Mono=andale mono,times; Arial=arial,helvetica,sans-serif; Arial Black=arial black,avant garde; Book Antiqua=book antiqua,palatino; Comic Sans MS=comic sans ms,sans-serif; Courier New=courier new,courier; Georgia=georgia,palatino; Helvetica=helvetica; Impact=impact,chicago; Symbol=symbol; Tahoma=tahoma,arial,helvetica,sans-serif; Terminal=terminal,monaco; Times New Roman=times new roman,times; Trebuchet MS=trebuchet ms,geneva; Verdana=verdana,geneva; Webdings=webdings; Wingdings=wingdings,zapf dingbats",
            toolbar_sticky: true,
            importcss_append: true,
            convert_urls: false,
            relative_urls : 0,
            remove_script_host : 0,
            height: 300,
            branding: false,
            menubar: false,
            fontsize_formats: "8px 9px 10px 11px 12px 14px 18px 24px 30px 36px 48px 60px 72px 96px",
            setup: function (editor) {
                let _this = this;
                editor.ui.registry.addButton('dialogimage', {
                    icon: 'image',
                    onAction: function () {
                        FileManage.showPopup('EDITOR', _this.id)
                    }
                })
            }
        });

        $(document).on('click', '.icon--drop', function () {
            $(this).parent().next('.transition-height').toggleClass('is-show');
            $(this).toggleClass('active')
        });

        $(document).on('click', '.drop-up', function () {
            $(this).parent().parent().removeClass('is-show');
            $(this).parent().parent().parent().find('.icon--drop').removeClass('active');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });

        $(document).ready(function(){
            if($('.msg-alert').length) {
                setTimeout(function(){
                    $('.msg-alert').fadeOut();
                }, 3000)
            }

            setTimeout(function(){
                $('#loadingIcon').fadeOut();
            }, 500)

            $('.select2-multiple').select2({
                placeholder: "Lựa chọn",
                allowClear: true
            });

        });

        $(document).on('click', '#btn-delete-resource', function () {
            let id = this.getAttribute('data-id');
            let url = this.getAttribute('data-url');
            $('#html-form-delete').html('');
            let html = '<form action="'+url+'" method="POST">\
                <input type="hidden" name="_method" value="DELETE">\
                <input type="hidden" name="_token" value="{{ csrf_token() }}">\
                <input type="hidden" name="id" value="'+id+'">\
                </form>';
            $('#html-form-delete').html(html);
        });

        function confirmDelete() {
            $('#confirmDelete').modal('show');
        }

        $('#confirmDelete').on('hidden.bs.modal', function () {
            $('#html-form-delete').html('');
        })

        function renderTable(url, aoColumns, columnDefs = []) {
            $('#js_datatable').dataTable({
                ajax: url,
                cache: false,
                stateSave: true,
                scrollX: true,
                columnDefs: columnDefs,
                language: {
                    'paginate': {
                        'previous': '<i class="c-icon c-icon-sm cil-chevron-double-left"></i>',
                        'next': '<i class="c-icon c-icon-sm cil-chevron-double-right"></i>'
                    }
                },
                aoColumns: aoColumns
            });
        }

        let changeOrdinal = function(that, number, url) {
            that.addClass('blink-border');
            that.parent().next('td').html('<div class="blink-color-danger" style="font-weight:bold;">Updating</div>')
            $.get(url, { ordinal: number }).done(function() {
                let clm = $('#js_datatable tr:nth-child(1)').find('td').length;
                setTimeout(function(){
                    $('#js_datatable').DataTable().order([ (clm - 2), "desc" ]).ajax.reload();
                }, 300)
                $('html,body').animate({
                    scrollTop: 0
                }, 500);
            })
        }
    </script>
</body>
</html>
