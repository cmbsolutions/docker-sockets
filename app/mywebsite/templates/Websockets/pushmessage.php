<?= $this->Html->css('status') ?>
<div>
    <h1>Server Push Client</h1>

    <div id="main">
        <?= $this->Form->create($pushmessage) ?>
        <?= $this->Form->control('message') ?>
        <?= $this->Form->button('Submit') ?>
        <?= $this->Form->end() ?>
    </div>
</div>
