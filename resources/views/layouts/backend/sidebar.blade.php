<aside class="left-sidebar" data-sidebarbg="skin5">
    {{-- Sidebar scroll--}}
    <div class="scroll-sidebar">
        {{-- Sidebar navigation--}}
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-copy"></i><span class="hide-menu">Artículos </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('posts.index') }}" class="sidebar-link"><i class="fas fa-copy"></i><span class="hide-menu">Todos los Artículos</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('posts.create') }}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Nuevo Post</span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-folder-open"></i><span class="hide-menu">Categorías </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('categories.index') }}" class="sidebar-link"><i class="fas fa-folder-open"></i><span class="hide-menu">Todas las Categorías</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('categories.create') }}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Nueva Categoría</span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-tags"></i><span class="hide-menu">Etiquetas </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{ route('tags.index') }}" class="sidebar-link"><i class="fas fa-tags"></i><span class="hide-menu">Todas las Etiquetas</span></a></li>
                        <li class="sidebar-item"><a href="{{ route('tags.create') }}" class="sidebar-link"><i class="fas fa-plus-circle"></i><span class="hide-menu">Nueva Etiqueta</span></a></li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('users.index') }}" aria-expanded="false"><i class="fas fa-users mr-2"></i><span class="hide-menu">Usuarios</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('replies.index') }}" aria-expanded="false"><i class="fas fa-comments  mr-2"></i><span class="hide-menu">Comentarios</span></a></li>
            </ul>
        </nav>
        {{-- End Sidebar navigation --}}
    </div>
    {{-- End Sidebar scroll--}}
</aside>
