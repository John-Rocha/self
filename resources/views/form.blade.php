@include('admin.template')

<div class="alert-dark text-md-center mb-5">
    <h1>Divisão de jogadores em equipes balanceadas</h1>
</div>
<div class="container col-md-6">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h6>Digite a experiência de cada jogador</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('jogo.store') }}" method="POST" class="form-group">
                @csrf
                <div class="form-group">
                    <label for="player1">Jogador</label>
                    <input type="number" name="player1" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" placeholder="Digite a experiência">
                </div>
                <div class="form-group">
                    <label for="player2">Jogador</label>
                    <input type="number" name="player2" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" placeholder="Digite a experiência">
                </div>
                <div class="form-group">
                    <label for="player3">Jogador</label>
                    <input type="number" name="player3" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" placeholder="Digite a experiência">
                </div>
                <div class="form-group">
                    <label for="player4">Jogador</label>
                    <input type="number" name="player4" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" placeholder="Digite a experiência">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Balancear</button>
                </div>
            </form>
        </div>
        <div class="card">
            <div class="card-header">
                <h6>Resultado</h6>
            </div>
            <div class="card-body">
                <table class="table table-condensed">
                    <thead class="table thead-dark">
                        <tr>
                            <th>Equipe1 - Jogador/Experiência</th>
                            <th>Equipe2 - Jogador/Experiência</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (isset($jogos))
                            @foreach ($jogos as $jogo)
                                <tr>
                                    <td>
                                        Jogador com Exp: {{ $jogo[0] + $jogo[3] }}
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            {{ route('jogo.index') }}
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
