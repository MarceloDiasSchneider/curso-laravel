 @if (isset($produto_detalhe))
    <form method="post" action="{{ route('produto.update', $produto_detalhe->id) }}">
        @method('PUT')
        <input type="hidden" name="id" value="{{ old('id') ?? $produto_detalhe->id }}">
@else
    <form method="post" action="{{ route('produto-detalhe.store') }}">
@endif
    @csrf
    <select name="produto_id">
        <option selected>Selecione uma unidaide</option>
        @foreach ($produtos as $produto)
            <option value="{{ $produto->id }}" {{ ( old('produto_id') ?? ( isset( $produto_detalhe->produto_id ) ? $produto_detalhe->produto_id : '') ) == $produto->id ? 'selected' : '' }}>{{ $produto->nome }}</option>
        @endforeach
    <select>
    <input type="text" name="comprimento" placeholder="Comprimento" class="borda-preta" value="{{ old('comprimento') ?? ( isset( $produto_detalhe->comprimento ) ? $produto_detalhe->comprimento : '') }}">
    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    <input type="text" name="largura" placeholder="Largura" class="borda-preta" value="{{ old('largura') ?? ( isset( $produto_detalhe->largura ) ? $produto_detalhe->largura : '') }}">
    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    <input type="text" name="altura" placeholder="Altura" class="borda-preta" value="{{ old('altura') ?? ( isset( $produto_detalhe->altura ) ? $produto_detalhe->altura : '') }}">
    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    <select name="unidade_id">
        <option selected>Selecione uma unidaide</option>
        @foreach ($unidades as $unidade)
            <option value="{{ $unidade->id }}" {{ ( old('unidade_id') ?? ( isset( $produto_detalhe->unidade_id ) ? $produto_detalhe->unidade_id : '') ) == $unidade->id ? 'selected' : '' }}>{{ $unidade->unidade . " - " . $unidade->descricao  }}</option>
        @endforeach
    <select>
    {{ $errors->has('unidade_id') ? $errors->first('unidade_id') : '' }}
    <button type="submit" class="borda-preta">Cadastrar</button>
</form>
