<?php

$this->extend('Croogo/Croogo./Common/admin_edit');

$this->CroogoHtml
	->addCrumb($this->CroogoHtml->icon('home'), '/admin')
	->addCrumb(__d('croogo', 'Users'), array('plugin' => 'Croogo/Users', 'controller' => 'Users', 'action' => 'index'));

if ($this->request->param('action') == 'edit') {
	$this->CroogoHtml->addCrumb($user->name, array(
		'plugin' => 'Croogo/Users', 'controller' => 'Users', 'action' => 'edit',
		$user->id
	));
	$this->set('title_for_layout', __d('croogo', 'Edit user %s', $user->username));
} else {
	$this->set('title_for_layout', __d('croogo', 'New user'));
}

if ($this->request->param('action') == 'add') {
	$this->Html->addCrumb(__d('croogo', 'Add'), array('plugin' => 'Croogo/Users', 'controller' => 'Users', 'action' => 'add'));
}
?>
<?php $this->start('actions'); ?>
<?php if ($this->request->param('action') == 'edit'): ?>
<?php
	echo $this->Croogo->adminAction(__d('croogo', 'Reset password'), array('action' => 'reset_password', $user->id));
?>
<?php endif; ?>
<?php $this->end(); ?>

<?php
echo $this->CroogoForm->create($user, array(
	'fieldAccess' => array(
		'User.role_id' => 1,
	),
	'class' => 'protected-form',
));
?>

<div class="row-fluid">
	<div class="span8">

		<ul class="nav nav-tabs">
		<?php
			echo $this->Croogo->adminTab(__d('croogo', 'User'), '#user-main');
			echo $this->Croogo->adminTabs();
		?>
		</ul>

		<div class="tab-content">

			<div id="user-main" class="tab-pane">
			<?php
				echo $this->CroogoForm->input('id');
				echo $this->CroogoForm->input('role_id', array('label' => __d('croogo', 'Role')));
				$this->CroogoForm->templates(array(
					'class' => 'span10',
				));
				echo $this->CroogoForm->input('username', array(
					'label' => __d('croogo', 'Username'),
				));
				echo $this->CroogoForm->input('name', array(
					'label' => __d('croogo', 'Name'),
				));
				echo $this->CroogoForm->input('email', array(
					'label' => __d('croogo', 'Email'),
				));
				echo $this->CroogoForm->input('website', array(
					'label' => __d('croogo', 'Website'),
				));
				echo $this->CroogoForm->input('timezone', array(
					'type' => 'select',
					'empty' => true,
					'options' => DateTimeZone::listIdentifiers(),
					'label' => __d('croogo', 'Timezone'),
				));
			?>
			</div>

			<?php echo $this->Croogo->adminTabs(); ?>
		</div>
	</div>

	<div class="span4">
	<?php
		echo $this->CroogoHtml->beginBox(__d('croogo', 'Publishing')) .
			$this->CroogoForm->button(__d('croogo', 'Apply'), array('name' => 'apply')) .
			$this->CroogoForm->button(__d('croogo', 'Save'), array('button' => 'success')) .
			$this->CroogoHtml->link(
			__d('croogo', 'Cancel'), array('action' => 'index'),
			array('button' => 'danger'));

		if ($this->request->param('action') == 'add'):
			echo $this->CroogoForm->input('notification', array(
				'label' => __d('croogo', 'Send Activation Email'),
				'type' => 'checkbox',
				'class' => false,
			));
		endif;

		echo $this->CroogoForm->input('status', array(
			'label' => __d('croogo', 'Status'),
			'class' => false,
		));

		$showPassword = !empty($user->status);
		if ($this->request->param('action') == 'add'):
			$out = $this->CroogoForm->input('password', array(
				'label' => __d('croogo', 'Password'),
				'class' => false,
				'disabled' => !$showPassword,
			));
			$out .= $this->CroogoForm->input('verify_password', array(
				'label' => __d('croogo', 'Verify Password'),
				'class' => false,
				'disabled' => !$showPassword,
				'type' => 'password'
			));

			$this->CroogoForm->unlockField('User.password');
			$this->CroogoForm->unlockField('User.verify_password');

			echo $this->CroogoHtml->div(null, $out, array(
				'id' => 'passwords',
				'style' => $showPassword ? '' : 'display: none',
			));
		endif;

		echo $this->CroogoHtml->endBox();

		echo $this->Croogo->adminBoxes();
	?>
	</div>

</div>
<?php echo $this->CroogoForm->end(); ?>
<?php

$script = <<<EOF
	$('#UserStatus').on('change', function(e) {
		var passwords = $('#passwords');
		var elements = $('input', passwords);
		elements.prop('disabled', !this.checked);
		if (this.checked) {
			passwords.show('fast');
		} else {
			passwords.hide('fast');
		}
	});
	$('#UserNotification').on('change', function(e) {
		var status = $('#UserStatus');
		status.attr('checked', false);
		status.trigger('change').parent().toggle('fast');
	});
EOF;

if ($this->request->params['action'] == 'admin_add'):
	$this->Js->buffer($script);
endif;
