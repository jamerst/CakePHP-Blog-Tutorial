<?php
class Post extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notBlank'
        ),
        'body' => array(
            'rule' => 'notBlank'
        )
    );

    // define association to users table, and enable caching of post count - makes querying number of posts much easier
    // value of post_count in table is simply incremented each time a user creates a post
    public $belongsTo = array(
        'User' => array('counterCache' => true)
    );

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }
}