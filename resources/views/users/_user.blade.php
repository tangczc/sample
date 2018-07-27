<li>
    <img src = "{{ $user -> gravatar() }}" alt = "{{ $user -> name}}" class = "gravatar" />
    <a href = "{{ route('users.show',$user -> id), $user -> id }}" class = "username">{{ $user -> name}}</a>
</li>