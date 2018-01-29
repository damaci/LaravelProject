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
                        <table width="70%" border="1px" margin="1px" align="center">

                                <tr align="center">
                                    <td>Localització</td>
                                    <td>Nom Producte</td>
                                    <td>Stock Inici</td>
                                    <td>Stock Final</td>
                                    <td>Provider</td>
                                    <td>Referència Povider</td>
                                </tr>
                                <tr align="center">
                                    <td>Armari A</td>
                                    <td>Tubs assaig plàstic PS16X100mm</td>
                                    <td>1</td>
                                    <td>1,5 x 500</td>
                                    <td>Pidiscat</td>
                                    <td>23311</td>
                                </tr>
                                <tr align="center">
                                    <td>Armari B</td>
                                    <td>Bosses autoclau</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>Medical-Express</td>
                                    <td>796-004</td>
                                </tr>
                                <tr align="center">
                                    <td>Armari C</td>
                                    <td>Plaques Petri</td>
                                    <td>2,5</td>
                                    <td>2</td>
                                    <td>Pidiscat</td>
                                    <td>12184</td>
                                </tr>
                                <tr align="center">
                                    <td>Armari D</td>
                                    <td>Plaques Petri</td>
                                    <td>2,5</td>
                                    <td>2</td>
                                    <td>Pidiscat</td>
                                    <td>12184</td>
                                </tr>
                                <tr align="center">
                                    <td>Armari E</td>
                                    <td>Agitador Vòrtex</td>
                                    <td>5</td>
                                    <td>5</td>
                                    <td>Pidiscat</td>
                                    <td>10957</td>
                                </tr>
                                <tr align="center">
                                    <td>Armari F</td>
                                    <td>Capil·lars hematocrit sense heparina</td>
                                    <td>2</td>
                                    <td>13</td>
                                    <td>Medical-Express</td>
                                    <td>723-623</td>
                                </tr>

                            </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
