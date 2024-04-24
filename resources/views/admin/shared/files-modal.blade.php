<div id="files-modal" class="modal fade modal_file_manage" tabindex="-1" aria-modal="true" role="dialog" style="z-index:9999;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="files-footer">
                <i style="position:absolute;right:0;cursor:pointer" onclick="$('.modal_file_manage').modal('hide')" class="text-danger fa fa-times-circle"></i>
                <span class="mr-2" style="font-weight:bold;text-transform:uppercase;">File Manager</span>
                <i class="fas fa-folder"></i>
                <span class="files-modal--where">/</span>
            </div>
            <div class="modal-body">
                <div class="files-i01-header d-flex" style="height:38px">
                    <button class="btn btn-primary mr-1" onclick="FileManage.reload()">
                        <i class="c-icon c-icon-sm cil-reload"></i>
                    </button>
                    <button class="btn btn-primary mr-1" onclick="FileManage.showUpload()">
                        <i class="c-icon c-icon-sm cil-plus"></i>
                        <span>Upload</span>
                    </button>
                    <button class="btn btn-primary mr-1 btn-show-form-dir" onclick="FileManage.showFormCreateFolder(true)">
                        <i class="c-icon c-icon-sm cil-folder"></i>
                        <span>Tạo thư mục</span>
                    </button>
                    <div id="files-modal--form-dir" class="ml-2 align-items-center" style="display:none;">
                        <input type="text" class="form-control c-form-control blink-border-danger" placeholder="Folder name">
                        <i style="font-size:25px;cursor:pointer" onclick="FileManage.showFormCreateFolder(false)" class="text-secondary ml-2 fa fa-times-circle"></i>
                        <i style="font-size:25px;cursor:pointer" onclick="FileManage.createFolder()" class="text-danger ml-1 fas fa-check-circle"></i>
                    </div>
                </div>
                <div class="files-i01-main" style="margin-top:10px">
                    <div class="card-box">
                        <div class="row files-modal--results">
                            <div class="text-center">Empty</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Upload File -->
<div class="modal fade files-manager-modal-upload" tabindex="-1" style="background:#3333339e;z-index:9999;" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-group">
                    <div class="files--name"></div>
                    <div class="img" id="img--preview" onclick="$('.choose-file-upload').click()">
                        <span>Choose a file or drag it here</span>
                    </div>
                    <input type="file" onchange="FileManage.changeFileUpload(this)" class="choose-file-upload" style="display:none;">
                    <button style="margin-top:10px;float:right;" class="btn btn-primary" onclick="FileManage.uploadFile()">Upload</button>
                    <button style="margin-top:10px;float:right;" class="btn btn-secondary mr-2" onclick="$('.files-manager-modal-upload').modal('hide')">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
