<?php 
class ArticleController extends Controller
{
	public function index()
	{
        $articles = DB::table('articulo')->get();
        

		return View::make('admin.article.index')
		             ->with('title','Articulos')
		             ->with('articles', $articles);
	}

	public function create()
	{
		$categories = DB::table('categoria')->get();
		
		return View::make('admin.article.create')
		             ->with('title', 'Crear nuevo &aacute;rticulo')
		             ->with('categories', $categories);
	}

	public function save()
	{
		$title = Input::get('titulo');
		$introduccion = Input::get('introduccion');
		$resumen = Input::get('resumen');
		$texto = Input::get('texto');
		$idCategoria = Input::get('idCategoria');
		$posicion = Input::get('posicion');
		$estado = Input::get('estado');
		$etiquetas = Input::get('etiquetas');
		$idUsuario = Input::get('idUsuario');

		$insertedId = DB::table('articulo')
		              ->insertGetId(array(
		              	'Titulo' => $title,
		              	'IdCategoria' => $idCategoria,
		              	'IdUsuario' => $idUsuario,
		              	'Introduccion' => $introduccion,
		              	'Resumen' => $resumen,
		              	'Texto' => $texto,
		              	'Posicion' => $posicion,
		              	'Etiquetas' => $etiquetas,
		              	'Estado' => $estado
		              	));

		return $insertedId ? '1' : '0';
	}

	public function edit($id)
	{
        $article = DB::table('articulo')
                       ->where('IdArticulo', '=', $id)
                       ->first();

        $categories = DB::table('categoria')->get();
        
        return View::make('admin.article.edit')
                    ->with('title', 'Editar articulo')
                    ->with('categories', $categories)
                    ->with('article', $article);
	}
}
?>