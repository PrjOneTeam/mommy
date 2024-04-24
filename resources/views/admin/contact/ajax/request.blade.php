<div class="row">
    <div class="col-sm-12">
        <table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
            <thead>
                <tr role="row">
                    <th>Ngày yêu cầu &nbsp;
                        <span class="icon_sort">
                            <i class='{{ $params['sort'] == 'desc' ? 'active' : '' }} down bx bxs-down-arrow' data-action='asc'></i>
                            <i class='{{ $params['sort'] == 'asc' ? 'active' : '' }} up bx bxs-up-arrow' data-action='desc'></i>
                        </span>
                    </th>
                    <th>Thông tin liên hệ</th>
                    <th>Ngành công nghiệp</th>
                    <th>Lời nhắn</th>
                    <th style="width:85px;text-align:center">Đã liên hệ</th>
                    <th style="width:15px;text-align:center">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($results as $key => $item)
                <tr id="item-contact-{{ $item->id }}">
                    <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</td>
                    <td>
                        <p style="margin-bottom:5px">
                            <b>Họ tên: </b><span style="font-size:12px;" class="badge badge-success">{{ $item->name }}</span>
                        </p>
                        <p style="margin-bottom:5px"><b>Email: </b>{{ $item->email }}</p>
                        <p style="margin-bottom:5px"><b>Phone: </b>{{ $item->phone }}</p>
                        <p style="margin-bottom:5px"><b>Công Ty: </b>{{ $item->company }}</p>
                        <p style="margin-bottom:5px"><b>Website: </b>{{ $item->website }}</p>
                    </td>
                    <td>{{ $item->industry }}</td>
                    <td style="max-width:380px;white-space:break-spaces;">{!! $item->message !!}</td>
                    <td style="text-align:center;">
                        <i class='contacted__btn bx bx-check {{ $item->contacted == 1 ? 'active' : '' }}' data-id='{{ $item->id }}' data-action='{{ $item->contacted == 1 ? 'uncheck' : 'check' }}'></i>
                    </td>
                    <td style="text-align:center">
                        <i class="c-icon c-icon-sm cil-trash" onclick="deleteItem('{{ $item->id }}')" style="font-size:22px;color:#d31e34;cursor:pointer;"></i>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 col-md-5">
        <span class="badge badge-primary" style="font-size:12px"> Có tất cả {{ $results->total() }} yêu cầu</span>
    </div>
    <div class="col-sm-12 col-md-7 text-right">
        <div class="dataTables_paginate paging_simple_numbers">
            {{ $results->withQueryString()->links() }}
        </div>
    </div>
</div>
