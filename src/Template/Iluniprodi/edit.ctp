<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $iluniprodi->id_prodi],
                ['confirm' => __('Are you sure you want to delete # {0}?', $iluniprodi->id_prodi)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Iluniprodi'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="iluniprodi form large-10 medium-9 columns">
    <?= $this->Form->create($iluniprodi) ?>
    <fieldset>
        <legend><?= __('Edit Iluniprodi') ?></legend>
        <?php
            echo $this->Form->input('nm_prodi');
            echo $this->Form->input('nm_ketua');
            echo $this->Form->input('tlpn');
            echo $this->Form->input('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
