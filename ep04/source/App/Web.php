<?php


namespace Source\App;

/** Controle geral do site. Relatórios, Sessão, etc.  */
class Web
{
    public function home($data)
    {
        echo "<h1>Home</h1>";
        var_dump($data);
    }

    public function contact($data)
    {
        echo "<h1>Contato</h1>";
        var_dump($data);

        $url = URL_BASE;
        require __DIR__."/../../views/contatc.php";
    }

    public function blog($data)
    {
        echo "<h1>Blog</h1>";
        var_dump($data);
    }

    public function post($data)
    {
        echo "<h1>Artigo</h1>";
        var_dump($data);
    }

    public function category($data)
    {
        echo "<h1>Categoria</h1>";
        var_dump($data);
    }

    public function error($data)
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }
}