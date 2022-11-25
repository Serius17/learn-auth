@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('User Table') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>

                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                </tr>
                            @empty
                                <tr>

                                    <td>No Data</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
