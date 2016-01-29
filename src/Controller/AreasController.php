<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Response;

/**
 * Areas Controller
 *
 * @property \App\Model\Table\AreasTable $Areas
 */
class AreasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->viewBuilder()->layout('ajax');
    	
        $items = $this->Areas->find();
        return new Response([
        		'type' => 'application/json',
        		'body' => json_encode($items),
        		'charset' => 'UTF-8'
        ]);
    }

    /**
     * View method
     *
     * @param string|null $id Area id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $area = $this->Areas->get($id, [
            'contain' => ['Questions']
        ]);
        $this->set('area', $area);
        $this->set('_serialize', ['area']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $area = $this->Areas->newEntity();
        if ($this->request->is('post')) {
            $area = $this->Areas->patchEntity($area, $this->request->data);
            if ($this->Areas->save($area)) {
                $this->Flash->success(__('The area has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The area could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $area = $this->Areas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $area = $this->Areas->patchEntity($area, $this->request->data);
            if ($this->Areas->save($area)) {
                $this->Flash->success(__('The area has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The area could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $area = $this->Areas->get($id);
        if ($this->Areas->delete($area)) {
            $this->Flash->success(__('The area has been deleted.'));
        } else {
            $this->Flash->error(__('The area could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
