<div class="section-box mto">
    <h4>{{__("File Info")}}</h4>
    <div class="section-body small-parag">
        <table class="file-info">
            <tbody>
            <tr>
                <td><i class="icon-book">&nbsp;</i><strong>{{__("Package")}}:</strong></td>
                <td><span class="space">1 File</span></td>
            </tr>
            @if($worksheet->size)
                <tr>
                    <td><i class="icon-file">&nbsp;</i><strong>{{__("Size")}}:</strong></td>
                    <td><span class="space">{{$worksheet->size}}</span></td>
                </tr>
            @endif
            <tr>
                <td><i class="icon-worksheet pr7">&nbsp;</i><strong>{{__("Format")}}:</strong></td>
                <td><span class="space">PDF</span></td>
            </tr>
            </tbody>
        </table>
        <p>@lang('app.download_capable').</p>
    </div>
</div>
