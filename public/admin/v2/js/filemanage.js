let FileManage = {
    target: '',
    isInput: null,
    flagChoose: false,
    fileUpload: null,
    showPopup: function (flag = false, isInput = null) {
        FileManage.flagChoose = flag;
        FileManage.isInput = isInput;
        $('#files-modal').modal('show');
        FileManage.getList();
    },
    reload: function () {
        FileManage.getList(FileManage.target);
    },
    getList: function (directory = '') {
        FileManage.fileUpload = null;
        $('#files-modal .files-i01-header').find('button').prop('disabled', true)
        $('.files-modal--results').html('<div class="sk-spinner sk-spinner-pulse"></div>')
        if (directory == null) directory = '';
        $.get('/v2/admin/file-management', {
            directory: directory
        }).then(function (res) {
            FileManage.showFormCreateFolder(false)
            FileManage.target = res.target;
            $('.files-modal--where').html(res.path);
            $('.files-modal--results').html(res.html);
            $('#files-modal .files-i01-header').find('button').prop('disabled', false)
        })
    },
    destroy: function (fileTarget, isFolder) {
        if (confirm('Do you want to delete?')) {
            $.post('/v2/admin/file-management/{FILE}', {
                file_target: fileTarget,
                is_folder: isFolder,
                _method: 'DELETE'
            }).then(function (res) {
                FileManage.getList(res.path);
            })
        }
    },
    showFormCreateFolder: function (isShow) {
        $('#files-modal--form-dir').find('input').val('');
        if (isShow) {
            $('#files-modal--form-dir').addClass('d-flex').show();
            $('.btn-show-form-dir').prop('disabled', true);
        }
        else {
            $('#files-modal--form-dir').removeClass('d-flex').hide();
            $('.btn-show-form-dir').prop('disabled', false);
        }
    },
    createFolder: function () {
        let folderName = $('#files-modal--form-dir').find('input').val();
        $.post('/v2/admin/file-management', {
            directory: FileManage.target,
            folder_name: folderName
        }).then(function (res) {
            alert(res.msg);
            FileManage.reload();
        }).fail(function (err) {
            alert(err.responseJSON.msg)
        })
    },
    showUpload: function () {
        $('.files--name').html('');
        $('#img--preview').html('<span>Choose a file or drag it here</span>');
        $('.files-manager-modal-upload').modal('show');
    },
    changeFileUpload: function (input) {
        let URL = window.URL || window.webkitURL;
        FileManage.previewFileUpload(input.files[0]);
    },
    previewFileUpload: function (file) {
        if (file) {
            let image = new Image();
            image.onload = function(e) {
                $('.files--name').html(file.name);
                if (this.width) $('#img--preview').html(image);
                else $('#img--preview').html('<i class="far fas fa-file-alt" style="color:#45bce0"></i>');
            };
            image.onerror = function() {
                $('.files--name').html(file.name);
                $('#img--preview').html('<i class="far fas fa-file-alt" style="color:#45bce0"></i>');
            };
            image.src = URL.createObjectURL(file);
            FileManage.fileUpload = file;
        }
    },
    uploadFile: function () {
        if (FileManage.fileUpload) {
            let formData = new FormData();
            formData.append('file', FileManage.fileUpload);
            formData.append('path', FileManage.target);
            formData.append('_method', 'PATCH');

            $.ajax({
                url: '/v2/admin/file-management/{FILE}',
                type: 'post',
                data: formData,
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                success: function(data) {
                    alert(data.msg);
                    FileManage.reload();
                    $('.files-manager-modal-upload').modal('hide');
                },
                error: function(err) {
                    console.log(err)
                }
            });
        }
    },
    chooseFile: function (file, typeItem) {
        if (FileManage.flagChoose && FileManage.flagChoose == 'IMG') {
            if (typeItem != FileManage.flagChoose) {
                alert('Please enter Image File Extensions .jpg,.png,.jpeg,.gif,.svg');
            } else if(typeItem == FileManage.flagChoose) {
                $(FileManage.isInput).attr('src', '/filemanage'+file);
                $(FileManage.isInput).next('input[type="hidden"]').val(file);
                $('#files-modal').modal('hide');
            }
        }
        else if(FileManage.flagChoose && FileManage.flagChoose == 'FILE') {
            if (typeItem == 'IMG') {
                alert('Please do not choose an image file');
            } else if(typeItem == 'FILE') {
                $(FileManage.isInput).val(file);
                $(FileManage.isInput).next().text(file);
                $('#files-modal').modal('hide');
            }
        } else if(FileManage.flagChoose && FileManage.flagChoose == 'EDITOR') {
            let activeEditor = tinymce.get(FileManage.isInput);
            activeEditor.insertContent('<img style="max-width:100%" src="/filemanage'+file+'">');
            $('#files-modal').modal('hide');
        } else if(FileManage.flagChoose && FileManage.flagChoose == 'VIDEO') {
            if (typeItem != FileManage.flagChoose) {
                alert('Please enter video file');
            } else if(typeItem == 'VIDEO') {
                let html = '<video style="width:100%" class="main-video" autoplay playsinline preload="auto" loop muted>\
                            <source src="/filemanage'+file+'" type="video/'+file.split('.').pop()+'">\
                        </video>';
                $(FileManage.isInput).html(html);
                $(FileManage.isInput).next('input[type="hidden"]').val(file);
                $(FileManage.isInput).prev('#prev-video').remove();
                $('#files-modal').modal('hide');
            }
        }
    }
}

$("html, body").on("dragover drop", function (e) {
    e.preventDefault();
    e.stopPropagation();
});

$('#img--preview')
    .on('dragover dragenter', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('is-dragover');
    })
    .on('dragleave dragend drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('is-dragover');
    })
    .on('drop', function (e) {
        e.preventDefault();
        let files = e.originalEvent.dataTransfer.files;
        FileManage.previewFileUpload(files[0]);
    });
