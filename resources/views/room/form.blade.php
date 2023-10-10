<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('roomnumber') }}
            {{ Form::text('roomnumber', $room->roomnumber, ['class' => 'form-control' . ($errors->has('roomnumber') ? ' is-invalid' : ''), 'placeholder' => 'Roomnumber']) }}
            {!! $errors->first('roomnumber', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('floor') }}
            {{ Form::text('floor', $room->floor, ['class' => 'form-control' . ($errors->has('floor') ? ' is-invalid' : ''), 'placeholder' => 'Floor']) }}
            {!! $errors->first('floor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rentpermonth') }}
            {{ Form::text('rentpermonth', $room->rentpermonth, ['class' => 'form-control' . ($errors->has('rentpermonth') ? ' is-invalid' : ''), 'placeholder' => 'Rentpermonth']) }}
            {!! $errors->first('rentpermonth', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary custom-button">{{ __('Submit') }}</button>
    </div>
</div>