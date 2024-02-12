@if (Session::has('success'))
<p id="notif" class="bg-dark text-white text-center">{{Session::get('success')}}</p>
@elseif (Session::has('fail'))
<p id="notif" class="bg-dark text-white text-center">{{Session::get('fail')}}</p>
@endif