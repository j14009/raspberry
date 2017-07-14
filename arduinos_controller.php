<?php
class ArduinosController extends AppController {

	var $name = 'Arduinos';

	function index() {
		$this->Arduino->recursive = 0;
		$this->set('arduinos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid arduino', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('arduino', $this->Arduino->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Arduino->create();
			if ($this->Arduino->save($this->data)) {
				$this->Session->setFlash(__('The arduino has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arduino could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid arduino', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Arduino->save($this->data)) {
				$this->Session->setFlash(__('The arduino has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The arduino could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Arduino->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for arduino', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Arduino->delete($id)) {
			$this->Session->setFlash(__('Arduino deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Arduino was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
