@if(session('image'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    <img src="{{ asset('images/'.session('image')) }}" width="300" />
@endif
