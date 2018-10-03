<?php
/**
 * Created by PhpStorm.
 * User: kostya
 * Date: 25/09/18
 * Time: 4:31 AM
 */

class MainController extends AbstractController
{
    public function index()
    {
        $model = $this->getModel(Model::class);
        $arr = $model->getPosts();
        $this->render('views/index.php', $arr);
    }

    public function post()
    {
        $id = filter_input(INPUT_GET, 'id');
        $post = $this->getModel(Model::class)->getPost($id);
        if (!$post) {
            return $this->render('views/404.php');
        }

        $this->render('views/edit_post.php', $post);
    }

    public function pageNotFound()
    {
        http_response_code(404);
        $this->render('views/404.php');
    }
}