@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Material</h2></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>Vista dels materials!</h3>
                        <table class="materials">
                            <tr>


                            </tr>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
