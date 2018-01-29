@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Provider</h2></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>Vista dels providers!</h3>
                        <table width="70%" border="1px" margin="1px" align="center">

                            <tr align="center">
                                <td>Provider</td>
                                <td>Correu</td>
                                <td>Direcció</td>
                            </tr>
                            <tr align="center">
                                <td>Pidiscat</td>
                                <td>pidiscat@gmail.com</td>
                                <td>C/Gran Via, 168</td>
                            </tr>
                            <tr align="center">
                                <td>Medical_Express</td>
                                <td>medicalexpress@gmail.com</td>
                                <td>Av/Diagonal, 389</td>
                            </tr>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
