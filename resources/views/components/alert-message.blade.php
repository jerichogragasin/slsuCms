@if (session()->has('message'))
<div class="alert alert-success fixed-top text-center p2 w-50 mx-auto" role="alert">
    <p>{{session()->get('message')}}</p>
</div>
@endif