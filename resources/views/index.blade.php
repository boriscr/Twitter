<x-body.body>
    <div class="content-index">
        <div class="nav-content">
            <x-body.nav />
        </div>
        <div class="contenido-content">
            <div class="nav-box">
                <x-body.navHeder />
                @if (isset($post))
                <x-body.posts :post="$post" />
                @else
                    <div class="post-section-content">
                        <h3>Sin contenido para mostrar.</h3>
                    </div>
                @endif
            </div>
            <div class="extras-content col-1">
                <x-body.extra />
            </div>
        </div>

    </div>
</x-body.body>
