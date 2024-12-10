@php
    $cursosSelecionados = $cursosSelecionados ?? false;
@endphp

@if($cursos->isEmpty())
    <p>Nenhum curso disponível para este setor.</p>
@else
    @foreach ($cursos as $curso)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="curso_id[]" value="{{ $curso->idCurso }}" id="curso_{{ $curso->idCurso }}"
                @if(is_array($cursosSelecionados) && in_array($curso->idCurso, $cursosSelecionados)) checked @endif>
            <label class="form-check-label" for="curso_{{ $curso->idCurso }}">
                {{ $curso->nomeCurso }}
            </label>
        </div>
    @endforeach
@endif
