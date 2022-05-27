<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
            <header class="modal__header">
                <h2>Editing my task list</h2>
                <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
            </header>
            <main>
                <form method="POST" action="{{ route('editEvent') }}">
                    @csrf
                    <input type="text" name="task_name" maxlength="30">
                    <input type="text" name="task_det" maxlength="30">
                    <input type="date" name="task_date">
                    <input type="time" name="task_datetime">

                    <select name='task_pri'>
                      <option value='1'>1</option>
                      <option value='2'>2</option>
                      <option value='3'>3</option>
                    </select>
                    <input type="date" name="task_comp">
                    <button class="modal__btn modal__btn-primary" type="submit">変更する</button>

                </form>
            </main>
        </div>
    </div>
</div>