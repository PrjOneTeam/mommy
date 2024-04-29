{{ csrf_field() }}
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['first_name']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="first_name" id="first_name"
                           class="form-control form-control input-acc"
                           value="{{ old('first_name', $customer->first_name ?? '') }}"
                           required/>
{{--                    @error('first_name')--}}
{{--                    <div class="text-danger">{{ $message }}</div>--}}
{{--                    @enderror--}}
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['last_name']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="last_name" id="last_name"
                           class="form-control form-control input-acc"
                           value="{{ old('last_name', $customer->last_name ?? '') }}"
                           required/>
{{--                    @error('last_name')--}}
{{--                    <div class="text-danger">{{ $message }}</div>--}}
{{--                    @enderror--}}
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['public_name']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="public_name" id="public_name"
                           class="form-control form-control input-acc"
                           value="{{ old('public_name', $customer->public_name ?? '') }}"
                           required/>
{{--                            @error('public_name')--}}
{{--                            <div class="text-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">Email<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="email" id="email"
                           class="form-control form-control input-acc"
                           value="{{ old('email', $customer->email ?? '') }}"
                           disabled/>
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['location']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="location" id="location"
                           class="form-control form-control input-acc"
                           value="{{ old('location', $customer->location ?? '') }}"
                           required/>
{{--                    @error('location')--}}
{{--                    <div class="text-danger">{{ $message }}</div>--}}
{{--                    @enderror--}}
                </fieldset>
            </div>
            <div class="col-sm-6 col-xs-12 padding-left-0">
                <fieldset class="form-group margin-bottom-15">
                    <label class="description margin-bottom-10">{{$lang['role']}}<span class="text-danger ml-1">*</span></label>
                    <input type="text" name="role" id="role"
                           class="form-control form-control input-acc"
                           value="{{ old('role', $customer->role ?? '') }}"
                           required/>
{{--                    @error('role')--}}
{{--                    <div class="text-danger">{{ $message }}</div>--}}
{{--                    @enderror--}}
                </fieldset>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <button class="btn btn-info">{{$lang['save']}}</button>
        <a class="btn btn-secondary" href="{{ route('admin.customer.index') }}">{{$lang['cancel']}}</a>
    </div>
</div>
