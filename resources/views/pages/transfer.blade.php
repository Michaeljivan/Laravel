@extends('layouts.app')

@section('content')

@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Transfer</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="transfer" class="col-md-4 control-label">Transfer from:</label>

                            <div class="col-md-6">
                                <select id="transfer" class="form-control">
                                    <option></option>
                                    <option>Savings</option>
                                    <option>Checking</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="transfer" class="col-md-4 control-label">Transfer to:</label>

                            <div class="col-md-6">
                                <select id="transfer" class="form-control">
                                    <option></option>
                                    <option>Savings</option>
                                    <option>Checking</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="amt" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-6">
                                <input id="amt" type="number" class="form-control" name="amt" min = "1" placeholder="$"  required>

                                @if ($errors->has('amt'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-warning">
                                    Transfer
                                </button>

                            
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@if(Auth::guest())
<div class="text-center">
    <a class="btn btn-primary" href="login">You must be logged in</a>
</div>
@endif
@endsection
