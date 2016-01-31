<div  class="form-group">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?= $this->Form->input('quiz_id', ['class'=>'form-control', 'type'  => 'text']); ?>
        <?= $this->Form->input('area_id', ['options' => $areas, 'class'=>'form-control', 'label'=>'Class']); ?>
        <?= $this->Form->input('question', ['class'=>'form-control']); ?>
        <?= $this->Form->input('answer', ['class'=>'form-control']); ?>
    </fieldset>
</div>
<div>
    <?= $this->Form->button(__('Submit'), ['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>