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
        {{-- 
            <div class="form-group">
                {{ Form::label('roomid') }}
                {{ Form::text('roomid', $tenant->roomid, ['class' => 'form-control' . ($errors->has('roomid') ? ' is-invalid' : ''), 'placeholder' => 'Roomid']) }}
                {!! $errors->first('roomid', '<div class="invalid-feedback">:message</div>') !!}
            </div> 
        --}}

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
            {{ Form::label('datemovedin') }}
            {{-- {{ Form::text('datemovedin', $tenant->datemovedin, ['class' => 'form-control' . ($errors->has('datemovedin') ? ' is-invalid' : ''), 'placeholder' => 'Datemovedin']) }} --}}
            {{-- <div class="dashboard__date"></div>  --}}
            <input class="dashboard__input-date" type="date" name="datemovedin" id="datemovedin" min="1900-01-01" max="2099-12-31" value="{{ isset($payment->datepaid) ? $payment->datepaid : '' }}">
            {!! $errors->first('datemovedin', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('datemovedout') }}
            {{-- {{ Form::text('datemovedout', $tenant->datemovedout, ['class' => 'form-control' . ($errors->has('datemovedout') ? ' is-invalid' : ''), 'placeholder' => 'Datemovedout']) }} --}}
            {{-- <div class="dashboard__date"></div>  --}}
            <input class="dashboard__input-date" type="date" name="datemovedout" id="datemovedout" min="1900-01-01" max="2099-12-31" value="{{ isset($payment->datepaid) ? $payment->datepaid : '' }}">
            {!! $errors->first('datemovedout', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary custom-button">{{ __('Submit') }}</button>
    </div>
</div>