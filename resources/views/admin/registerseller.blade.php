registerseller


@forelse($users as $user)
<br>
{{$user->id}}
<a href="/verifyseller/{{$user->id}}">verify</a>


@empty
@endforelse