<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Snippets Controller
 *
 * @property \App\Model\Table\SnippetsTable $Snippets
 */
class SnippetsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
         $this->paginate = [
            'contain' => ['Subcategories']
            ];
        
        $this->set('snippets', $this->paginate($this->Snippets));
        $this->set('_serialize', ['snippets']);
    }

    /**
     * View method
     *
     * @param string|null $id Snippet id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $snippet = $this->Snippets->get($id, [
            'contain' => ['Subcategories']
        ]);
        $this->set('snippet', $snippet);
        $this->set('_serialize', ['snippet']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $snippet = $this->Snippets->newEntity();
        if ($this->request->is('post')) {
            $snippet = $this->Snippets->patchEntity($snippet, $this->request->data);
            if ($this->Snippets->save($snippet)) {
                $this->Flash->success('The snippet has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The snippet could not be saved. Please, try again.');
            }
        }
        $subcategories = $this->Snippets->Subcategories->find('list', ['limit' => 200]);
        $this->set(compact('snippet','subcategories'));
        $this->set('_serialize', ['snippet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Snippet id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $snippet = $this->Snippets->get($id, [
            'contain' => ['Subcategories']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $snippet = $this->Snippets->patchEntity($snippet, $this->request->data);
            if ($this->Snippets->save($snippet)) {
                $this->Flash->success('The snippet has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The snippet could not be saved. Please, try again.');
            }
        }
        $subcategories = $this->Snippets->Subcategories->find('list', ['limit' => 200]);
        $this->set(compact('snippet','subcategories'));
        $this->set('_serialize', ['snippet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Snippet id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $snippet = $this->Snippets->get($id);
        if ($this->Snippets->delete($snippet)) {
            $this->Flash->success('The snippet has been deleted.');
        } else {
            $this->Flash->error('The snippet could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
