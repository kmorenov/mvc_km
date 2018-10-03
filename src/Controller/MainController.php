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
        $arr['template'] = 'views/index.php';

        $this->render($arr);
    }

    public function post()
    {
        $id = filter_input(INPUT_GET, 'id');
        $arr = $this->getModel(Model::class)->getPost($id);
        if (!$arr) {
            return $this->render($arr['template'] = 'views/404.php');
        }
        $arr['template'] = 'views/edit_post.php';
        $this->render($arr);
    }

    public function pageNotFound()
    {
        http_response_code(404);
        $this->render($arr['template'] = 'views/404.php');
    }
}