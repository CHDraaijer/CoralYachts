<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Yachts Controller
 *
 * @property \App\Model\Table\YachtsTable $Yachts
 *
 * @method \App\Model\Entity\Yacht[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class YachtsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $yachts = $this->paginate($this->Yachts);

        $this->set(compact('yachts'));
    }

    /**
     * View method
     *
     * @param string|null $id Yacht id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $yacht = $this->Yachts->get($id, [
            'contain' => []
        ]);

        $this->set('yacht', $yacht);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $yacht = $this->Yachts->newEntity();
        if ($this->request->is('post')) {
            $yacht = $this->Yachts->patchEntity($yacht, $this->request->getData());
            if ($this->Yachts->save($yacht)) {
                $this->Flash->success(__('The yacht has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The yacht could not be saved. Please, try again.'));
        }
        $this->set(compact('yacht'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Yacht id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $yacht = $this->Yachts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $yacht = $this->Yachts->patchEntity($yacht, $this->request->getData());
            if ($this->Yachts->save($yacht)) {
                $this->Flash->success(__('The yacht has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The yacht could not be saved. Please, try again.'));
        }
        $this->set(compact('yacht'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Yacht id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $yacht = $this->Yachts->get($id);
        if ($this->Yachts->delete($yacht)) {
            $this->Flash->success(__('The yacht has been deleted.'));
        } else {
            $this->Flash->error(__('The yacht could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
