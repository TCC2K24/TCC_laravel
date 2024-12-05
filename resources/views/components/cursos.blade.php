@if($cursos->isEmpty())
    <p>Nenhum curso disponível para este setor.</p>
@else
    @foreach ($cursos as $curso)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="curso_id[]" value="{{ $curso->idCurso }}" id="curso_{{ $curso->idCurso }}">
            <label class="form-check-label" for="curso_{{ $curso->idCurso }}">
                {{ $curso->nomeCurso }}
            </label>
        </div>
    @endforeach
@endif
