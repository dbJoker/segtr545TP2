
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('List Schools'), array('action' => 'index')); ?></li>
				
                                <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Years Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Years'), array('controller' => 'years', 'action' => 'index'), array('class' => '')); ?></li> 
					<li class="list-group-item"><?php echo $this->Html->link(__('New Years'), array('controller' => 'years', 'action' => 'add'), array('class' => '')); ?></li> 
                    </ul>
            </div>
			<div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Course Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                        
				<li class="list-group-item"><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add'), array('class' => '')); ?></li> 
                    </ul>
                </div>
                        
                <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Rooms Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu scrollable-menu" role="menu">
                        
				<li class="list-group-item"><?php echo $this->Html->link(__('List Rooms'), array('controller' => 'rooms', 'action' => 'index'), array('class' => '')); ?></li> 
				<li class="list-group-item"><?php echo $this->Html->link(__('New Rooms'), array('controller' => 'rooms', 'action' => 'add'), array('class' => '')); ?></li> 
                    </ul>
                </div>
                                
                                <?php if ($this->Session->read('Auth.User.role') == 'admin') {?>
                            
                <div class="dropdown">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?= __('Users Menu')?> <span class="caret"></span></button>
                    <ul class="dropdown-menu scrollable-menu" role="menu">
                       
		<li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('Add User'), array('controller' => 'users','action' => 'add'), array('class' => '')); ?> </li>
                    </ul>
                </div>
                <?php } ?> 
                                
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add School'); ?></h2>

		<div class="schools form">
		
			<?php echo $this->Form->create('School', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('adress', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->