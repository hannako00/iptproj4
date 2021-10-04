@extends('base')

@section('content')
<br>
<br>
<div class="container">
    <div class="mt-2" style="float:center; ">
        <h1 class="text-black">Activity Log</h1>
    </div>
    <table class="table table-success table-striped text-center">
        <thead class="theadstyle">
            <th>Timestamp</th>
            <th>Log Entry</th>
        </thead>
        <tbody>

            @foreach($logs as $log)
            <tr>
                <td>{{$log->created_at}}</td>
                <td>{{$log->log_entry}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@stop
