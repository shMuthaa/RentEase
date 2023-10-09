<div class="box box-info padding-1">
    <div class="box-body">
        
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
        <div class="form-group">
            {{ Form::label('datepaid') }}
            {{ Form::text('datepaid', $payment->datepaid, ['class' => 'form-control' . ($errors->has('datepaid') ? ' is-invalid' : ''), 'placeholder' => 'Datepaid']) }}
            {!! $errors->first('datepaid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amountpaid') }}
            {{ Form::text('amountpaid', $payment->amountpaid, ['class' => 'form-control' . ($errors->has('amountpaid') ? ' is-invalid' : ''), 'placeholder' => 'Amountpaid']) }}
            {!! $errors->first('amountpaid', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>