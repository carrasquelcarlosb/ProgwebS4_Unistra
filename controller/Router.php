<?php
class Router
{
    private $_ctrl;
    private $_view;
    public function routeReq()
        try
        {
            spl_autoload_register(function($class))
            {
                require_once('/model',$class,'.php');
                $url ='';

                //Obtention de controlleur selon l'action de l'utilisateur
                if(isset($_GET['url']))
                {
                    $url = explode('/',filter_var($_GET['url'],
                    FILTER_SANITIZE_URL));

                    $controller = ucfirst(strtolower($url[0]));
                    $controllerClass="Controller".$controller;
                    $controllerFile= "controllers/".controllerClass.".php";

                    if(file_exists($controllerFile))
                    {
                        require_once($controllerFile);
                        $this->_ctrl = new $controllerClass($url);
                    }
                    else
                    {
                        throw new Exception('Page introuvable');
                    }
                }
                else
                {
                    require_once('controller/ControllerAccueil.php');
                    $this->_ctrl = new ControllerAccueil($url);
                }
            }
        }
        // Gestion des erreurs
        catch(Exception $a)
        {
            $errorMsg = $a->getMessage();
            require_once('../view/viewError.php');
        }
}
