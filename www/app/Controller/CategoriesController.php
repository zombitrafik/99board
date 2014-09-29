<?php
class CategoriesController extends AppController {

    var $name = 'Categories';

    function index() {
        $this->set('categories', $this->Category->find('all'));
    }

    function add() {
        if (!empty($this->data)) {
            if ($this->Category->save($this->data)) {
                $this->Session->setFlash('Ваша категория сохранена. Вот и всё');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function delete($id) {
       $this->Category->delete($id);
       $this->Session->setFlash('Категория с идентификатором: '.$id.' удалена.');
       $this->redirect(array('action'=>'index'));
    }
    
  function edit($id = null) {
       $this->Category->id = $id;
       if (empty($this->data)) {
           $this->data = $this->Category->read();
       } else {
           if ($this->Category->save($this->data)) {
               $this->Session->setFlash('Ваша категория изменена.');
               $this->redirect(array('action' => 'index'));
           }
       }
   }

}

?>
