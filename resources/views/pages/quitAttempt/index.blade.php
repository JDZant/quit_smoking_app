@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header bg-gradient-blue">
                        <div class="d-flex justify-content-between">
                            <h4>Quit Attempts</h4>
                            <a href="{{ route('quit-attempts.create') }}">
                                <i class="fas text-white fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>{{ __('quit-attempts.table.start_date') }}</th>
                                <th>{{ __('quit-attempts.table.end_date') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($quitAttempts as $quitAttempt)
                                <tr>
                                    <td>{{ $quitAttempt->start_date }}</td>
                                    @if(is_null($quitAttempt->end_date))
                                        <td>-</td>
                                    @else
                                        <td>{{ $quitAttempt->end_date }}</td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
