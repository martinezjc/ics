<?php 
class ArticleController extends Controller
{
	public function index()
	{
		return View::make('admin.article.index')->with('title','Articulos');
	}
}
?>