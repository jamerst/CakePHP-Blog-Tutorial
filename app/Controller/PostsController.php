<?php
class PostsController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index() {
        $this->set('posts', $this->Post->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('No post ID provided'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Post not found'));
        }
        $this->set('post', $post);
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Post->create();
            if($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Post saved successfully'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error(__('Failed to create post'));
            }
        }
    }

    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('No Post ID provided'));
        }

        $post = $this->Post->findById($id);
        if (!$post) {
            throw new NotFoundException(__('Post not found'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Post->id = $id;
            if ($this->Post->save($this->request->data)) {
                $this->Flash->success(__('Post successfully updated'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Failed to update post'));
        }

        if (!$this->request->data) {
            $this->request->data = $post;
        }
    }

    public function delete($id) {
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Post->delete($id)) {
            $this->Flash->success(
                __('Post ID %s successfully deleted', h($id))
            );
        } else {
            $this->Flash->error(
                __('Failed to delete post ID %s', h($id))
            );
        }

        return $this->redirect(array('action' => 'index'));
    }
}