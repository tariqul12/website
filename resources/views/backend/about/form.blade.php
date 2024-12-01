<div class="box box-info padding-1">
    <div class="box-body row">

        {!! Form::hidden('pre_fee', $client->fee) !!}
        {!! Form::hidden('pre_generatebill', $client->generatebill) !!}

        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('name') }}
                {{ Form::text('name', $client->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                {!! $errors->first('name', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('email') }}
                {{ Form::email('email', $client->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
                {!! $errors->first('email', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('phone') }}
                {{ Form::text('phone', $client->phone, ['class' => 'form-control' . ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Phone']) }}
                {!! $errors->first('phone', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('mobile') }}
                {{ Form::text('mobile', $client->mobile, ['class' => 'form-control' . ($errors->has('mobile') ? ' is-invalid' : ''), 'placeholder' => 'Mobile']) }}
                {!! $errors->first('mobile', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('Designation') }}
                {{ Form::select('clientdesignation_id',$clientdesignation, $client->clientdesignation_id, ['required'=>'required','class' => 'form-control' . ($errors->has('clientdesignation_id') ? ' is-invalid' : ''),'placeholder' => '']) }}
                {!! $errors->first('clientdesignation_id', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('Monthly Membership fee amount') }}
                {{ Form::number('fee', $client->fee, ['min'=>0 ,'class' => 'form-control' . ($errors->has('fee') ? ' is-invalid' : ''), 'placeholder' => 'Fee']) }}
                {!! $errors->first('fee', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('gender') }}
                {{ Form::select('gender',['Male'=>'Male','Female'=>'Female','Others'=>'Others'], $client->gender, ['required'=>'required','class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : '')]) }}
                {!! $errors->first('gender', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {{ Form::label('city') }}
                {{ Form::text('city', $client->city, ['class' => 'form-control' . ($errors->has('city') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
                {!! $errors->first('city', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('address') }}
                {{ Form::text('address', $client->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
                {!! $errors->first('address', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                {{ Form::label('Profile image') }}
                <img height="100px" src="{{asset('storage/'.$client->image)}}" alt="">
                {{ Form::file('images', ['class' => 'form-control' . ($errors->has('images') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
                {!! $errors->first('images', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        </div>









        {{-- <div class="form-group">
            {{ Form::label('sn') }}
            {{ Form::text('sn', $client->sn, ['class' => 'form-control' . ($errors->has('sn') ? ' is-invalid' : ''), 'placeholder' => 'Sn']) }}
            {!! $errors->first('sn', '<p class="invalid-feedback">:message</p>') !!}
        </div> --}}






        @isset($client->temp)
            <div class="form-group">
                {{ Form::label('temp') }}
                {{ Form::select('temp', [1=>'Temporary',0=>'Member'],$client->temp, ['required'=>'required','class' => 'form-control' . ($errors->has('temp') ? ' is-invalid' : '')]) }}
                {!! $errors->first('temp', '<p class="invalid-feedback">:message</p>') !!}
            </div>
        @endisset


        {{-- <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::select('status', [1=>'Active',2=>'Inactive'],$client->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<p class="invalid-feedback">:message</p>') !!}
        </div> --}}

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

