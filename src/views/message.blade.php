@if (session()->has('flash_notification.message'))
    @if (session()->has('flash_notification.overlay'))
        @include('flash::modal', [
            'modalClass' => 'flash-modal', 
            'title'      => session('flash_notification.title'), 
            'body'       => session('flash_notification.message')
        ])
    @else
        <div class="callout {{ session('flash_notification.level') }}">
            {!! session('flash_notification.message') !!}
        </div>        
    @endif
@endif
