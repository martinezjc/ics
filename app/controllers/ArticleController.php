<?php 
class ArticleController extends Controller
{
	public function index()
	{
        $articles = DB::table('articulos')->get();
        

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
}
?>