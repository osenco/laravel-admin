<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        @if(config('admin.show_environment'))
        <strong>Env</strong>&nbsp;&nbsp; {!! config('app.env') !!}
        @endif

        &nbsp;&nbsp;&nbsp;&nbsp;

        @if(config('admin.show_version'))
        <strong>Version</strong>&nbsp;&nbsp; {!! \Encore\Admin\Admin::VERSION !!}
        @endif

    </div>
    <!-- Default to the left -->

    @if(config('admin.copyright_link'))
    <strong>Powered by <a href="{{config('admin.copyright_link')}}" target="_blank">{{config('admin.copyright_text')}}</a></strong>
    @else
    <strong>&copy; {!! date('Y') !!} <a href="https://github.com/z-song/laravel-admin" target="_blank">{!! config('app.name') !!}</a></strong>
    @endif
</footer>
