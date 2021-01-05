<?php 

class User
{
    protected $user_type;
    protected $username;
    protected $password;

    public function __construct($db, $params)
    {
        $this->title = $params['title'];
        $this->subtitle = $params['subtitle'];
        $this->body = $params['body'];
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $this->date = date('d-m-Y');
        $this->published = true;

        $db->insert(
            'posts',
            [
                'title' => $params['title'],
                'subtitle' => $params['subtitle'],
                'published' => '1',
                'body' => $params['body'],
                'image' => $params['image']
            ]
        );

    }

}