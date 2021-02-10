@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('send-mail') }}" method="post">

                      @csrf
                      @method('POST')

                      <label for="mailText">Text mail:</label> <br>
                      <textarea name="mailText" rows="8" cols="80"></textarea>

                      <br>

                      <input type="submit" name="" value="Invia">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
