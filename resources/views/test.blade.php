    <form action="{{route('testhandle')}}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="submit">
    </form>

