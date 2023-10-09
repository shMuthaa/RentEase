<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fullname') }}
            {{ Form::text('fullname', $tenant->fullname, ['class' => 'form-control' . ($errors->has('fullname') ? ' is-invalid' : ''), 'placeholder' => 'Fullname']) }}
            {!! $errors->first('fullname', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('phonenumber') }}
            {{ Form::text('phonenumber', $tenant->phonenumber, ['class' => 'form-control' . ($errors->has('phonenumber') ? ' is-invalid' : ''), 'placeholder' => 'Phonenumber']) }}
            {!! $errors->first('phonenumber', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('email') }}
            {{ Form::text('email', $tenant->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('roomid') }}
            {{ Form::text('roomid', $tenant->roomid, ['class' => 'form-control' . ($errors->has('roomid') ? ' is-invalid' : ''), 'placeholder' => 'Roomid']) }}
            {!! $errors->first('roomid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rentdue') }}
            {{ Form::text('rentdue', $tenant->rentdue, ['class' => 'form-control' . ($errors->has('rentdue') ? ' is-invalid' : ''), 'placeholder' => 'Rentdue']) }}
            {!! $errors->first('rentdue', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rentpaid') }}
            {{ Form::text('rentpaid', $tenant->rentpaid, ['class' => 'form-control' . ($errors->has('rentpaid') ? ' is-invalid' : ''), 'placeholder' => 'Rentpaid']) }}
            {!! $errors->first('rentpaid', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('balance') }}
            {{ Form::text('balance', $tenant->balance, ['class' => 'form-control' . ($errors->has('balance') ? ' is-invalid' : ''), 'placeholder' => 'Balance']) }}
            {!! $errors->first('balance', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datemovedin') }}
            {{ Form::text('datemovedin', $tenant->datemovedin, ['class' => 'form-control' . ($errors->has('datemovedin') ? ' is-invalid' : ''), 'placeholder' => 'Datemovedin']) }}
            {!! $errors->first('datemovedin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('datemovedout') }}
            {{ Form::text('datemovedout', $tenant->datemovedout, ['class' => 'form-control' . ($errors->has('datemovedout') ? ' is-invalid' : ''), 'placeholder' => 'Datemovedout']) }}
            {!! $errors->first('datemovedout', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>