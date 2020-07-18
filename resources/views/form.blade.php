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

                @foreach (range(1,4) as $i)

                <div class="form-group">
                    <label for="player{{ $i }}">Jogador {{ $i }}</label>
                    <input type="number" name="player{{ $i }}" class="form-control" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" placeholder="Digite a experiência">
                </div>

                @endforeach
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Balancear</button>
                </div>
            </form>
        </div>
    </div>
</div>
