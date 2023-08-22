@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center " style="height: 70vh;S">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading font-weight-bold">Register</div>
                <hr>
                @if($errors->any())
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <strong>{{$errors->first()}}</strong>
                        </div>
                    </div>
                @endif

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('2fa') }}">
                      {{ csrf_field() }}

                      <div class="form-group">
                          <p>Please enter the <strong>OTP</strong> generated on your Authenticator App. <br>
                          Ensure you submit the current one because it refreshes every 30 seconds.</p>
                          <label for=  9:49