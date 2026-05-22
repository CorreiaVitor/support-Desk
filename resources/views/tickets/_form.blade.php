<div class="mb-3">
    <label for="title" class="form-label">Título do chamado</label>
    <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" placeholder="Ex: Computador não liga">
</div>

<div class="mb-3">
    <label for="category_id" class="form-label">Categoria</label>
    <select id="category_id" name="category_id" class="form-select">
        <option value"">Selecione uma categoria</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected((string) old('category_id') === (string) $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="priority_id" class="form-label">Prioridade</label>
    <select id="priority_id" name="priority_id" class="form-select">
        <option selected>Selecione uma prioridade</option>

        @foreach ($priorities as $priority)
            <option value="{{ $priority->id }}"  @selected((string) old('priority_id') === (string) $priority->id)>
                {{ $priority->name }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Descrição do problema</label>
    <textarea id="description" name="description" class="form-control" rows="6"
        placeholder="Descreva com detalhes o problema encontrado...">{{ old('description') }}</textarea>
</div>

{{-- O upload real será implementado apenas em uma etapa futura. --}}
{{-- <div class="mb-4">
                            <label for="attachment" class="form-label">Anexo</label>
                            <input type="file" id="attachment" class="form-control">
                            <div class="form-text">
                                Campo visual. O upload real será implementado apenas em uma etapa futura.
                            </div>
                        </div> --}}

<div class="d-flex justify-content-end gap-2">
    <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary">
        Cancelar
    </a>

    <button type="submit" class="btn btn-primary">
        Abrir chamado
    </button>
</div>
