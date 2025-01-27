<div class="container d-lg-show">
    <div class="inner-wrap">
        <ul class="menu horizontal-menu category-menu">
            @forelse ($categories as $categorie)
                <li>
                    {{-- <a href="{{ route('shop', ['category' => $categorie->id ?? null]) }}"> --}}
                    <a href="{{ route('shop', ['category' => $categorie->name ?? null]) }}">
                        <i class="fa-solid {{ $categorie->icon }}"></i>{{ $categorie->name}}
                    </a>
                </li>
            @empty
                Rien à afficher
            @endforelse
            <li>
                <a href="/magasin">
                    <i class="w-icon-dots-circle"></i>Voir tous
                </a>
            </li>
            
        </ul>
    </div>
</div>