<?php Block::put('breadcrumb') ?>
    <ul>
        <li><a href="<?= Backend::url('octobro/maillog/logs') ?>">Logs</a></li>
        <li><?= e($this->pageTitle) ?></li>
    </ul>
<?php Block::endPut() ?>

<?php if (!$this->fatalError): ?>

    <div class="layout">
        <div class="scoreboard">
            <div data-control="toolbar">
                <div class="scoreboard-item title-value">
                    <h4>ID</h4>
                    <p>#<?= $formModel->id ?></p>
                </div>
                <div class="scoreboard-item title-value">
                    <h4>SENT</h4>
                    <p class="<?= $formModel->sent ? 'positive' : 'negative' ?>"><?= strtoupper($formModel->sent ? 'yes' : 'no') ?></p>
                </div>
                <div class="scoreboard-item title-value">
                    <h4>CODE</h4>
                    <p><?= $formModel->code ?></p>
                </div>
            </div>
        </div>
        <div class="layout-row">
            <?= $this->formRender(['section' => 'outside', 'preview' => true]) ?>
            <?= $this->formRender(['section' => 'primary', 'preview' => true]) ?>
        </div>
        <div class="form-buttons">
            <a href="<?= Backend::url('octobro/maillog/logs') ?>" class="btn btn-default oc-icon-chevron-left">Return</a>
        </div>
    </div>

<?php else: ?>

    <p class="flash-message static error"><?= e($this->fatalError) ?></p>
    <p><a href="<?= Backend::url('octobro/maillog/logs') ?>" class="btn btn-default"><?= e(trans('backend::lang.form.return_to_list')) ?></a></p>

<?php endif ?>
