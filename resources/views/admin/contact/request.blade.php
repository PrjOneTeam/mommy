@extends('admin.layouts.app')
@section('title') Yêu cầu liên hệ @endsection
@section('content')
<style>
    .icon_sort i.bx {
        display: none;
        cursor: pointer;
    }
    .icon_sort i.bx.active {
        display: inline;
    }
    .contacted__btn {
        background: #eee;
        padding: 2px 2px;
        font-size: 20px;
        color: #eee;
        border-radius: 3px;
        cursor: pointer;
    }
    .contacted__btn.active {
        background: #50a5f1;
        color: #fff;
    }
</style>
<div class="container">
	<div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0 font-size-18">Yêu cầu liên hệ</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">Yêu cầu liên hệ</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <b>Từ</b>&nbsp;&nbsp;<input type="date" id="startTime" value="{{-- Carbon\Carbon::now()->format('Y-m-d') --}}">
                    &nbsp;&nbsp;&nbsp;<b>Đến</b>&nbsp;&nbsp;<input type="date" id="endTime" value="{{-- Carbon\Carbon::now()->format('Y-m-d') --}}">
                        &nbsp;&nbsp;&nbsp;<b>Họ tên</b>&nbsp;&nbsp;<input type="name" id="inputName">
                        &nbsp;&nbsp;&nbsp;<b>Ngành công nghiệp</b>&nbsp;&nbsp;<select style="padding:3px" id="inputIndustry">
                            <option value="">Tất cả</option>
                            @foreach(config('data.industry') as $industry)
                            <option value="{{ trim($industry) }}">{{ trim($industry) }}</option>
                            @endforeach
                        </select>
                        &nbsp;&nbsp;&nbsp;<b>Trạng thái</b>&nbsp;&nbsp;<select style="padding:3px" id="inputContacted">
                            <option value="">Tất cả</option>
                            <option {{ isset($params['inputContacted']) && $params['inputContacted'] == 1 ? 'selected' : '' }} value="1">Đã liên hệ</option>
                            <option {{ isset($params['inputContacted']) && $params['inputContacted'] == 0 ? 'selected' : '' }} value="0">Chưa liên hệ</option>
                        </select>
                    </div>
                    <div style="margin-top:15px">
                        <hr>
                        <button class="btn btn-sm btn-primary btnSearch">Tìm kiếm</button>
                        <a class="btn btn-sm btn-default" href="{{ route('admin.contact-request.index') }}">Reset</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row" style="align-items:center">
                            <div class="col-md-8 text-left">
                                <span> Danh sách yêu cầu</span>
                            </div>
                        </div>
                    </div>
                    <div id="datatable_wrapper" style="clear:both;" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
<script>
    let _params = {
        sort: '{{ isset($params["sort"]) ? $params["sort"] : 'desc' }}',
        page: '{{ isset($params["page"]) ? $params["page"] : 1 }}'
    }

    showList(decodeURIComponent(location.search));

    function showList(_params) {
        $.get('{{ route('admin.ajax.contact_requests') }}', _params).done(function(res) {
            $('#datatable_wrapper').html(res.html);
            $('.pagination a.page-link').each(function() {
                let href = $(this).attr('href');
                href = href.replace('{{ route('admin.ajax.contact_requests') }}', '');
                $(this).attr('href', href);
            })
        })
    }

    function deleteItem(idTem) {
        if (confirm('Bạn có muốn xóa?')) {
            $.post('{{ route('admin.ajax.contact_requests_delete') }}', {
                id: idTem
            }).done(function(res) {
                if(res.is_deleted == 1) {
                    $('#item-contact-' + idTem).remove();
                }
            })
        }
    }

    function deletePost(urlDelete) {
        if (confirm('Bạn có muốn xóa?')) {
            window.location.href = urlDelete
        }
    }

    $(document).on('click', '.icon_sort .bx', function() {
        _params.sort = $(this).attr('data-action');

        let setParam = "";
        if(location.search) {
            var url_params = decodeURIComponent(location.search)
            .slice(1).replace("+", " ")
            .split("&").map(function(pair) {
                var p = pair.split("=", 2);
                if (!p[1]) {
                  return [];
                }
                p[1] = p[1].split('"').join("");
                return p;
            });

            url_params.forEach(function(key, index) {
                if(!(typeof key[0] == 'undefined' || key[0] == 'undefined' || key[0] == undefined)) {
                    if (index === 0) {
                        if (key[0] == 'sort') {
                            setParam = "?" + key[0] + "=" + _params.sort;
                        } else {
                            setParam = "?" + key[0] + "=" + key[1];
                        }
                    }
                    else {
                        if (key[0] == 'sort') {
                            setParam = setParam + "&" + key[0] + "=" + _params.sort;
                        } else {
                            setParam = setParam + "&" + key[0] + "=" + key[1];
                        }
                    }
                }
            });
        } else {
            setParam = "?sort=" + _params.sort;
        }

        history.replaceState(null, null, setParam);

        showList(_params);

        $('.icon_sort .bx').addClass('active');
        $(this).removeClass('active');
    })

    $(document).on('click', '.contacted__btn', function() {
        let _this = $(this);
        let _id =  _this.attr('data-id');
        let _action =  _this.attr('data-action');

        $.get('{{ route('admin.ajax.contacted_update') }}', {
            id: _id, action: _action
        }).done(function(res) {
            if (_action == 'check') {
                _this.addClass('active');
                _this.attr('data-action', 'uncheck');
            } else {
                _this.removeClass('active');
                _this.attr('data-action', 'check');
            }
        })
    })

    $(document).on('click', '.btnSearch', function() {
        let startTime = $('#startTime').val();
        let endTime = $('#endTime').val();
        let inputName = $('#inputName').val();
        let inputIndustry = $('#inputIndustry').val();
        let inputContacted = $('#inputContacted').val();

        _params.startTime = startTime;
        _params.endTime = endTime;
        _params.inputName = inputName;
        _params.inputIndustry = inputIndustry;
        _params.inputContacted = inputContacted;
        showList(_params);

        let setParam = "";
        Object.keys(_params).forEach(function(key, index) {
            if (index === 0) {
                setParam = "?" + key + "=" + _params[key];
            } else {
                setParam = setParam + "&" + key + "=" + _params[key];
            }
        });
        history.replaceState(null, null, setParam);
    })

</script>
@endsection
