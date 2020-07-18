@include('admin.template')
<div class="container col-md-6">
    <div class="card">
        <div class="card-header alert-dark">
            <h6 class="justify-content-center">
                Equipes
            </h6>
        </div>
        <div class="card-body">
            @foreach($teams as $team)
                <br>Time: {{ $team->getId() }} <br>
                @foreach($team->getPlayers() as $player)
                    {{ $player->getId() }} - XP: {{ $player->getExperience() }}
                    <br>
                @endforeach
            @endforeach
        </div>
    </div>
    <form action="{{ route('jogo.index') }}">
        @csrf
    <button type="submit" class="btn btn-dark">Voltar</button>
    </form>
</div>

