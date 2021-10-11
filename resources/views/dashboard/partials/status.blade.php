@if (session('status'))
    <div class="alert atert-info">
        {{session('status')}}
    </div>
@endif