@extends('layouts.app')
@section('content')
    <div class="">
        <div class="">
            <div class="">
                <router-link class="" to='/' exact>Home</router-link>
                <router-link to='/about'>About</router-link>
            </div>
            <div class="">
                <router-link class="" to='/login' exact>Login</router-link>
                <router-link to='/register'>Register</router-link>
            </div>
        </div>
    </div>
    <div class="">
        <router-view></router-view>
    </div>
    
@endsection