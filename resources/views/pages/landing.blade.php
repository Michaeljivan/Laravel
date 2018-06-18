
@extends('layouts.app')

@section('content')

@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
               
                <div class="text-center">
                <div class="panel-body">
                <div class="text-center">
                    <table class="table">
                        <tr>
                            <th>Checking</th>
                            <th>Savings</th>
                        </tr>
                        <tr class="table">
                            <td><strong><label>$</label>0.00</strong></td>
                            <td><strong><label>$</label>0.00</strong></td>
                        </tr>
                    </table>
                </div><br>

                <div class="center">
                    <button class="btn btn-success" onclick="location.href='{{ url('deposit') }}'">Deposit</button>
                    <button class="btn btn-primary" onclick="location.href='{{ url('withdraw') }}'">Withdraw</button>
                    <button class="btn btn-primary" onclick="location.href='{{ url('transfer') }}'">Transfer</button>
                    <button class="btn btn-primary" onclick="location.href='{{ url('transactions') }}'">Transactions</button>
                </div>
                </div>
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