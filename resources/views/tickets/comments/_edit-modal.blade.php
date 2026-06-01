<div class="modal fade" id="editCommentModal-{{ $comment->id }}" tabindex="-1"
    aria-labelledby="editCommentModalLabel-{{ $comment->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('ticket.comments.update', [$ticket, $comment]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editCommentModalLabel-{{ $comment->id }}">Editar comentário</h1>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="commentType-{{ $comment->id }}" class="form-label">Tipo de comentário</label>

                        <select id="commentType-{{ $comment->id }}" name="commentType" class="form-select">
                            <option value="0" @selected(!$comment->is_internal)>Comentário público</option>

                            <option value="1" @selected($comment->is_internal)>Comentário interno</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="comment-{{ $comment->id }}" class="form-label">Comentário</label>

                        <textarea id="comment-{{ $comment->id }}" name="comment" class="form-control" rows="4">{{ old('comment', $comment->body) }}</textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>

                    <button type="submit" class="btn btn-primary">Salvar alteração</button>
                </div>
            </form>
        </div>
    </div>
</div>
