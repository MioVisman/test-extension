@if ($p->user->isGuest)
          <span>Guest</span>
@else
          <span>{{ $p->user->username }}</span>
@endif
