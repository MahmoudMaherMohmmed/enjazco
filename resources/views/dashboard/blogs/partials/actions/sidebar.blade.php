<li class="slide">
    <a class="side-menu__item" data-toggle="slide" href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">{{ __('blogs.plural') }}</span><i class="angle fe fe-chevron-down"></i></a>
    <ul class="slide-menu">
        <li><a class="slide-item" href="{{ route('admin.blogs.index') }}">{{ __('blogs.actions.list') }}</a></li>
        <li><a class="slide-item" href="{{ route('admin.blogs.create') }}">{{__('blogs.actions.create')}}</a></li>
    </ul>
</li>
