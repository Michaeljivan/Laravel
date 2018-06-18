@extends('layouts.app')

@section('content')

@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <table>
                    <tr>
                        <th>Transaction #</th>
                        <th>Type</th>
                        <th>Amount</th>
                    </tr>
                    <tr>
                        <td><label>number</label>
                        <td><label>type</label></td>
                        <td><label>$</label>0.00</td>
                    </tr>
                </table>
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
