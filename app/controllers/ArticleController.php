<?php 
class ArticleController extends Controller
{
	public function index()
	{
        $articles = DB::table('articulo')
                    ->leftJoin('categoria', 'articulo.IdCategoria', '=', 'categoria.IdCategoria')
                    ->get();
        

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

	public function update()
	{
		$idArticulo = Input::get('idArticulo');
		$title = Input::get('titulo');
		$introduccion = Input::get('introduccion');
		$resumen = Input::get('resumen');
		$texto = Input::get('texto');
		$idCategoria = Input::get('idCategoria');
		$posicion = Input::get('posicion');
		$estado = Input::get('estado');
		$etiquetas = Input::get('etiquetas');
		$idUsuario = Input::get('idUsuario');

		$updated = DB::table('articulo')
		               ->where('IdArticulo', '=', $idArticulo)
		               ->update(array(
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

		return $updated ? 'registro actualizado' : 'Error de actualizacion';
	}

	public function showArticle($slug)
	{
        $article = DB::table('articulo')
                   ->where('slug', '=', $slug)
                   ->first();

		return View::make('site.article')
		             ->with('article', $article);
	}
}
?>