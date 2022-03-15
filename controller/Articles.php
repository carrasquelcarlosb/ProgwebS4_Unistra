<?php
class Articles extends Controller
{
    public function __construct()
    {
        $this->articleModel = $this->model('Article');
    }

    public function index()
    {
        $articles = $this
            ->articleModel
            ->findAllArticles();
        $data = ['articles' => $articles];
        $this->view('articles/index');
    }

    public function create()
    {
        if (isLoggedIn())
        {
            header("Location: " . URLROOT . "/articles");
        }
        $data = ['title' => '',
         'body' => '',
         'titleError' => '',
          'bodyError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'ARTICLES')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
              'user_id' => $_SESSION['user_id'],
              'title' => trim($_POST['title']),
             'body' => trim($_POST['body']) ,
              'titleError' => '',
              'bodyError' => ''
            ];

            if(empty($data['title']))
            {
              $data['titleError'] = "The title of an article cannot be empty";
            }
            if(empty($data['body']))
            {
              $data['bodyError'] = "The body of an article cannot be empty";
            }


            if(empty($data[' ']) && empty($data['bodyError']))
            {
              if($this->articleModel->addArticle($data))
              {
                header("Location: " . URLROOT . "/articles");
              }
              else
              {
                die("Something went terribly wrong, please try again or not")
              }
            }
            else
            {
              $this->view('articles/create', $data);
            }
        }

        $this->view('/articles/create', $data);
    }

    public function update($id)
    {
      if (isLoggedIn())
      {
        header("Location: " . URLROOT . "/articles");
      }
      elseif($article->user_id != $_SESSION['user_id'])
      {
            header("Location: " . URLROOT . "/articles");
      }
      $article = $this->articleModel->findArticleById($id);
      $data =[
        'article' => $article,
        'title' => '',
        'body' => '',
        'titleError' => '',
        'bodyError' => ''
      ];

      if ($_SERVER['REQUEST_METHOD'] == 'ARTICLES')
      {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $data = [
            'title' => trim($_POST['title']) ,
           'body' => trim($_POST['body']) ,
            'titleError' => '',
            'bodyError' => ''];

          if(empty($data['title']))
          {
            $data['titleError'] = "The title of a article cannot be empty";
          }
          if(empty($data['body']))
          {
            $data['bodyError'] = "The body of a article cannot be empty";
          }

          if ($data['article']->title == $this->articleModel->findArticleById($id)
          ->title
          {
            $data['titleError'] == 'Repeated article name, pls change title fren';
          }

          if ($data['article']->body == $this->articleModel->findArticleById($id)
          ->body
          {
            $data['bodyError'] == 'Repeated text, pls change body text fren';
          }

          if(empty($data['titleError']) && empty($data['bodyError']))
          {
            if($this->articleModel->addArticle($data))
            {
              header("Location: " . URLROOT . "/articles");
            }
            else
            {
              die("Something went terribly wrong, please try again or not")
            }
          }
          else
          {
            $this->view('articles/create', $data);
          }
      }

      $this->view('/articles/create', $data);
  }
}
