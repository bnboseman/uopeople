<div  class="form-group">
    <?= $this->Form->create($area) ?>
    <fieldset>
        <legend><?= __('Add Class') ?></legend>
        <?= $this->Form->input('id', ['class'=>'form-control', 'type'=>'text', 'label' => 'Class Number']); ?>
        <?= $this->Form->input('name', ['class'=>'form-control']); ?>
    </fieldset>
</div>
<div>
    <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>