<div class="scoreboard">
    <div data-control="toolbar">
        <?php if (count($logs)): ?>
        <div class="scoreboard-item control-chart" data-control="chart-bar">
            <ul>
                <?php foreach ($logs as $log): ?>
                    <li><span><?= $log->code ?></span></li>
                <?php endforeach ?>
            </ul>
        </div>
        <?php endif ?>
        <div class="scoreboard-item title-value">
            <h4>Total Email Sent</h4>
            <p><span><?= $sent ?></span></p>
        </div>
    </div>
</div>
