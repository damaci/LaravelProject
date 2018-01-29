@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Users</h2></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>Vista dels usuaris!</h3>
                            <table width="70%" border="1px" margin="1px" align="center">

                            <tr align="center">
                                <td>Usuari</td>
                                <td>Correu</td>
                            </tr>
                            <tr align="center">
                                <td>david</td>
                                <td>david@gmail.com</td>
                            </tr>
                            <tr align="center">
                                <td>arnau</td>
                                <td>arnau@gmail.com</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection