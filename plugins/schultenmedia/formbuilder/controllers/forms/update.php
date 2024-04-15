<?php Block::put('breadcrumb') ?>
    <ul>
        <li>
            <a href="<?= Backend::url('schultenmedia/formbuilder/forms') ?>">
                <?= e(trans('schultenmedia.formbuilder::lang.form.forms')) ?>
            </a>
        </li>
        <li><?= e($this->pageTitle) ?></li>
    </ul>
<?php Block::endPut() ?>

<?php if (! $this->fatalError): ?>
    <?= Form::open(['class' => 'layout']) ?>

    <div class="layout-row">
        <?= $this->formRender() ?>
    </div>

    <div class="form-buttons">
        <div class="loading-indicator-container">
            <button
                type="submit"
                data-request="onSave"
                data-request-data="redirect:0"
                data-hotkey="ctrl+s, cmd+s"
                data-load-indicator="<?= e(trans('backend::lang.form.saving_name', ['name' => $formRecordName])) ?>"
                class="btn btn-primary">
                <?= e(trans('backend::lang.form.save')) ?>
            </button>

            <button
                type="button"
                data-request="onSave"
                data-request-data="close:1"
                data-hotkey="ctrl+enter, cmd+enter"
                data-load-indicator="<?= e(trans('backend::lang.form.saving_name', ['name' => $formRecordName])) ?>"
                class="btn btn-default">
                <?= e(trans('backend::lang.form.save_and_close')) ?>
            </button>

            <?php if (BackendAuth::userHasAccess('schultenmedia.formbuilder.access_forms.delete')) : ?>
                <button
                    type="button"
                    class="oc-icon-trash-o btn-icon danger pull-right"
                    data-request="onDelete"
                    data-load-indicator="<?= e(trans('backend::lang.form.deleting_name', ['name' => $formRecordName])) ?>"
                    data-request-confirm="<?= e(trans('backend::lang.form.action_confirm')) ?>">
                </button>
            <?php endif ?>

            <span class="btn-text">
                <?= e(trans('backend::lang.form.or')) ?>
                <a href="<?= Backend::url('schultenmedia/formbuilder/forms') ?>">
                    <?= e(trans('backend::lang.form.cancel')) ?>
                </a>
            </span>
        </div>
    </div>

    <?= Form::close() ?>
<?php else: ?>
    <p class="flash-message static error"><?= e($this->fatalError) ?></p>
    <p><a href="<?= Backend::url('schultenmedia/formbuilder/forms') ?>"
          class="btn btn-default"><?= e(trans('backend::lang.form.return_to_list')) ?>
        </a></p>
<?php endif ?>