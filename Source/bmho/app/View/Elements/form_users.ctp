<?php
echo $this->Form->create
        (
        'User', array
    (
    'url' => array
        (
        'controller' => 'users',
        'action' => $action
    ),
    'class' => 'well',
    'inputDefaults' => array
        (
        'label' => false,
        'error' => false
    )
        )
);
?>		
<fieldset>
    <legend><?php echo __($label); ?></legend>
    <?php
    echo $this->Form->input('username', array(
        'placeholder' => __('Username'),
        'class' => 'span12'
            )
    );

    echo $this->Form->input('password', array(
        'type' => 'password',
        'class' => 'span12',
        'placeholder' => __('Password')
            )
    );

    echo $this->Form->input('email', array(
        'type' => 'text',
        'class' => 'span12',
        'placeholder' => __('Email')
            )
    );

    echo $this->Form->input('role', array(
        'options' => array(
            'admin' => __('Admin'), 
            'user' => __('User')
            )));
    ?>
</fieldset>
<?php
$options = array(
    'label' => __('Submit'),
    'class' => 'btn btn-primary'
);
echo $this->Form->end($options);
?>