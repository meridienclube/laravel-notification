<div class="kt-notification-v2">
    @foreach($notifications as $notification)
        <a href="{{ (is_null($notification->read_at) && isset($notification->data['url']))? $notification->data['url'] : '#' }}"
           class="kt-notification-v2__item">
            <div class="kt-notification-v2__item-icon">
                <i class="flaticon-bell kt-font-success"></i>
            </div>
            <div class="kt-notification-v2__itek-wrapper">
                <div class="kt-notification-v2__item-title">
                    {{ $notification->data['title'] ?? '' }}
                </div>
                <div class="kt-notification-v2__item-desc">
                    {{ $notification->created_at->diffForHumans() }}
                </div>
            </div>
        </a>
    @endforeach
</div>

