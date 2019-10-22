<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Yachttypes Controller
 *
 * @property \App\Model\Table\YachttypesTable $Yachttypes
 *
 * @method \App\Model\Entity\Yachttype[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class YachttypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $yachttypes = $this->paginate($this->Yachttypes);

        $this->set(compact('yachttypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Yachttype id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $yachttype = $this->Yachttypes->get($id, [
            'contain' => []
        ]);

        $this->set('yachttype', $yachttype);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $yachttype = $this->Yachttypes->newEntity();
        if ($this->request->is('post')) {
            $yachttype = $this->Yachttypes->patchEntity($yachttype, $this->request->getData());
            if ($this->Yachttypes->save($yachttype)) {
                $this->Flash->success(__('The yachttype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The yachttype could not be saved. Please, try again.'));
        }
        $this->set(compact('yachttype'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Yachttype id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $yachttype = $this->Yachttypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $yachttype = $this->Yachttypes->patchEntity($yachttype, $this->request->getData());
            if ($this->Yachttypes->save($yachttype)) {
                $this->Flash->success(__('The yachttype has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The yachttype could not be saved. Please, try again.'));
        }
        $this->set(compact('yachttype'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Yachttype id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $yachttype = $this->Yachttypes->get($id);
        if ($this->Yachttypes->delete($yachttype)) {
            $this->Flash->success(__('The yachttype has been deleted.'));
        } else {
            $this->Flash->error(__('The yachttype could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
