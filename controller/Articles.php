<?php
require_once dirname(__DIR__). "/config/config.php";

class Articles extends Controller
{
    /**
     * @var mixed
     */
    private $articleModel;

    public function __construct()
    {
        $this->articleModel = $this->model("Article");
    }

    public function index()
    {
        $articles = $this->articleModel->findAllArticles();
        $data = ["articles" => $articles];
        $this->view("articles/index", $data);
    }

    public function create()
    {
        if (isLoggedIn()) {
            header("Location: " . URL . "/articles");
        }
        $data = [
            "title" => "",
            "body" => "",
            "titleError" => "",
            "bodyError" => "",
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                "user_id" => $_SESSION["user_id"],
                "title" => trim($_POST["title"]),
                "body" => trim($_POST["body"]),
                "titleError" => "",
                "bodyError" => "",
            ];

            if (empty($data["title"])) {
                $data["titleError"] = "The title of an article cannot be empty";
            }
            if (empty($data["body"])) {
                $data["bodyError"] = "The body of an article cannot be empty";
            }

            if (empty($data[" "]) && empty($data["bodyError"])) {
                if ($this->articleModel->addArticle($data)) {
                    header("Location: " . URL . "/articles");
                } else {
                    die(
                        "Something went terribly wrong, please try again or not"
                    );
                }
            } else {
                $this->view("articles/create", $data);
            }
        }

        $this->view("/articles/create", $data);
    }

    public function update($id)
    {
        $article = $this->articleModel->findArticleById($id);
        if (isLoggedIn()) {
            header("Location: " . URL . "/articles");
        } elseif ($article->user_id != $_SESSION["user_id"]) {
            header("Location: " . URL . "/articles");
        }
        $article = $this->articleModel->findArticleById($id);
        $data = [
            "article" => $article,
            "title" => "",
            "body" => "",
            "titleError" => "",
            "bodyError" => "",
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                "id" => $id,
                "articles" => $article,
                "title" => trim($_POST["title"]),
                "body" => trim($_POST["body"]),
                "titleError" => "",
                "bodyError" => "",
            ];

            if (empty($data["title"])) {
                $data["titleError"] = "The title of a article cannot be empty";
            }
            if (empty($data["body"])) {
                $data["bodyError"] = "The body of a article cannot be empty";
            }

            if (
                $data["title"] == $this->articleModel->findArticleById($id)->title
            ) {
                $data["titleError"] = "The title of a article cannot be empty";
            }

            if (
                $data["body"] == $this->articleModel->findArticleById($id)->body
            ) {
                $data["bodyError"] == "Repeated text, pls change body text ";
            }

            if (empty($data["titleError"]) && empty($data["bodyError"])) {
                if ($this->articleModel->addArticle($data)) {
                    header("Location: " . URL . "/articles");
                } else {
                    die(
                        "Something went terribly wrong, please try again or not"
                    );
                }
            } else {
                $this->view("articles/update", $data);
            }
        }

        $this->view("articles/update", $data);
    }
}
