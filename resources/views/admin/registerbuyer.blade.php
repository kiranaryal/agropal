registerbuyer
@forelse($users as $user)
<br>
{{$user->id}}
<a href="/verifybuyer/{{$user->id}}">verify</a>





@empty
@endforelse