@if(session()->has('delete'))
    <div class="alert alert-danger" style="margin:15px">{{session('delete')}}</div>
@endif