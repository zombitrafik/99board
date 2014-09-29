<h1>Редактируем категорию</h1>
<?php
   echo $this->form->create(array('action' => 'edit'));
   echo $this->form->input('name');
   echo $this->form->input('id', array('type'=>'hidden'));
   echo $this->form->end('Сохранить');
?>
