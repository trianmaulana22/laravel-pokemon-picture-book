<div id="pokemon_block">
    <div class="wrap-inner">
        <ul class="poke_list flexlist">
            @foreach ($pokemons as $pokemon)
                <li class="item">
                    <a href="{{ route('poke_show', $pokemon['id']) }}">
                        No.{{ $pokemon['id'] }} {{ $pokemon['jp_name'] }}
                        <div class="imgarea">
                            <img src="{{ $pokemon['front_default'] }}" alt="{{ $pokemon['jp_name'] }}">
                        </div>
                    </a>
                    <div class="stats">
                        @for ($i = 0; $i < $pokemon['hp'] / 10; $i++)
                            <span class="single_gauge">▓</span>
                        @endfor
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
