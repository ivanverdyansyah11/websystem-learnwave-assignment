<div class="modal fade" id="deleteAgendaModal" tabindex="-1" aria-labelledby="deleteAgendaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title d-flex align-items-center justify-content-between">
                    <h2 class="title">Delete Agenda</h2>
                    <button type="button" class="button-exit" data-bs-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('assets/images/icon/exit.svg') }}" alt="Exit Icon" width="16">
                    </button>
                </div>
                <form class="form d-flex flex-column">
                    <p class="paragraph">Confirm Agenda Deletion: Are you sure you want to delete this agenda? This action cannot be undone, and the agenda will be permanently removed from the system.</p>
                    <div class="button-group d-flex gap-2">
                        <button type="submit" class="button-primary">Delete Agenda</button>
                        <button type="button" class="button-reverse" data-bs-dismiss="modal" aria-label="Close">Cancel Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
