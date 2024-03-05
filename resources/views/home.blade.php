@extends('layouts.app')
@section('title')
  ログイン
@endsection('title')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('メニュー') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('ログインするか、アカウントを登録してください(・ω・)ノ') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
