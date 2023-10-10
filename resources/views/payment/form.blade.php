<div class="box box-info padding-1">
    <div class="box-body">      
        {{-- <div class="form-group">
            {{ Form::label('roomid') }}
            {{ Form::select('roomid', $rooms, $payment->roomid, ['class' => 'form-control' . ($errors->has('roomid') ? ' is-invalid' : '')]) }}
            {!! $errors->first('roomid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('tenantid') }}
            {{ Form::select('tenantid', $tenants, $payment->tenantid, ['class' => 'form-control' . ($errors->has('tenantid') ? ' is-invalid' : '')]) }}
            {!! $errors->first('tenantid', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
       
        <div class="form-group">
            {{ Form::label('roomid', 'Room') }}
            <select name="roomid" id="roomid" class="form-control{{ $errors->has('roomid') ? ' is-invalid' : '' }}">
                @foreach($rooms as $room)
                    <option value="{{ $room->id }}">{{ $room->roomnumber }} - {{ $room->floor }} Floor</option>
                @endforeach
            </select>
            {!! $errors->first('roomid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('tenantid', 'Tenant') }}
            <select name="tenantid" id="tenantid" class="form-control{{ $errors->has('tenantid') ? ' is-invalid' : '' }}">
                @foreach($tenants as $tenant)
                    <option value="{{ $tenant->id }}">{{ $tenant->fullname }}</option>
                @endforeach
            </select>
            {!! $errors->first('tenantid', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('datepaid') }}
            {{-- {{ Form::text('datepaid', $payment->datepaid, ['class' => ' dashboard__input-date' . ($errors->has('datepaid') ? ' is-invalid' : ''), 'placeholder' => 'Datepaid', 'type'=>'date']) }} --}}
            {{-- <div class="dashboard__date"></div>  --}}
            <input class="dashboard__input-date" type="date" name="datepaid" id="datepaid" min="1900-01-01" max="2099-12-31" value="{{ isset($payment->datepaid) ? $payment->datepaid : '' }}">
            {!! $errors->first('datepaid', '<div class="invalid-feedback">:message</div>') !!}
        </div> 

        <div class="form-group">
            {{ Form::label('amountpaid') }}
            {{ Form::text('amountpaid', $payment->amountpaid, ['class' => 'form-control' . ($errors->has('amountpaid') ? ' is-invalid' : ''), 'placeholder' => 'Amountpaid']) }}
            {!! $errors->first('amountpaid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        {{-- 
            Original 
                <div class="form-group">
                    {{ Form::label('datepaid') }}
                    {{ Form::text('datepaid', $payment->datepaid, ['class' => 'form-control' . ($errors->has('datepaid') ? ' is-invalid' : ''), 'placeholder' => 'Datepaid']) }}
                    {!! $errors->first('datepaid', '<div class="invalid-feedback">:message</div>') !!}
                </div> 
                <div class="form-group">
                    {{ Form::label('roomid') }}
                    {{ Form::text('roomid', $payment->roomid, ['class' => 'form-control' . ($errors->has('roomid') ? ' is-invalid' : ''), 'placeholder' => 'Roomid']) }}
                    {!! $errors->first('roomid', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                <div class="form-group">
                    {{ Form::label('tenantid') }}
                    {{ Form::text('tenantid', $payment->tenantid, ['class' => 'form-control' . ($errors->has('tenantid') ? ' is-invalid' : ''), 'placeholder' => 'Tenantid']) }}
                    {!! $errors->first('tenantid', '<div class="invalid-feedback">:message</div>') !!}
                </div> 
        --}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary custom-button">{{ __('Submit') }}</button>
    </div>
</div>